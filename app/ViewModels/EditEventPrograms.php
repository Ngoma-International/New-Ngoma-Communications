<?php

declare(strict_types=1);

namespace App\ViewModels;

use App\Http\Controllers\Admin\programs\EventProgramsAdminController;
use App\Models\EventProgram;
use App\Models\Facilitator;
use App\Models\Seminar;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class EditEventPrograms extends ViewModel
{
    public string $indexUrl;

    public string $updateUrl;

    public function __construct(public EventProgram $program)
    {
        $this->indexUrl = action([EventProgramsAdminController::class, 'index']);
        $this->updateUrl = action([EventProgramsAdminController::class, 'update'], $this->program);
    }

    public function program(): EventProgram
    {
        return $this->program;
    }

    public function events(): array|Collection|\Illuminate\Support\Collection
    {
        return Seminar::query()
            ->whereNotIn('type_id', [4, 5])
            ->get();
    }

    public function facilitators(): array|Collection|\Illuminate\Support\Collection
    {
        return Facilitator::query()
            ->orderByDesc('created_at')
            ->get();
    }
}
