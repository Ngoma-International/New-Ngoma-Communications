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
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileDoesNotExist;
use Spatie\MediaLibrary\MediaCollections\Exceptions\FileIsTooBig;

class ProgramsRepository
{
    use HasImagesUploads;

    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function store(StoreProgramRequest $request): Model|EventProgram|Builder
    {
        $validated = $request->validated();
        $validated['status'] = true;
        $program = EventProgram::query()
            ->create($validated);
        $program->addMediaFromRequest('image')
           ->toMediaCollection('images');
        StoreProgramsEvent::dispatch($program);
        return $program;
    }

    /**
     * @throws FileIsTooBig
     * @throws FileDoesNotExist
     */
    public function update(UpdateProgramRequest $request, EventProgram $program): EventProgram
    {
        $validated = $request->validated();
        $program->clearMediaCollection('images');
        $program->update($validated);
        $program->addMediaFromRequest('image')
            ->toMediaCollection('images');
        return $program;
    }

    public function delete(EventProgram $program): EventProgram
    {
        $program->clearMediaCollection('image');
        $program->delete();
        return $program;
    }
}
