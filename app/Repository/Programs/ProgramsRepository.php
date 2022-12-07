<?php

declare(strict_types=1);

namespace App\Repository\Programs;

use App\Events\Backend\StoreProgramsEvent;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;
use App\Models\EventProgram;
use App\Traits\HasImagesUploads;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class ProgramsRepository
{
    use HasImagesUploads;

    public function store(StoreProgramRequest $request): Model|EventProgram|Builder
    {
        $validated = $request->validated();
        $validated['status'] = true;
        $program = EventProgram::query()
            ->create($validated);
        StoreProgramsEvent::dispatch($program);
        return $program;
    }

    public function update(UpdateProgramRequest $request, EventProgram $program): EventProgram
    {
        $validated = $request->validated();
        $program->update($validated);
        return $program;
    }

    public function delete(EventProgram $program): EventProgram
    {
        $program->delete();
        return $program;
    }
}
