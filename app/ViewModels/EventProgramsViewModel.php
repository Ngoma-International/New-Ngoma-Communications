<?php

namespace App\ViewModels;

use App\Http\Controllers\Admin\programs\EventProgramsAdminController;
use App\Models\EventProgram;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class EventProgramsViewModel extends ViewModel
{
    public string $createUrl;
    public function __construct()
    {
        $this->createUrl = action([EventProgramsAdminController::class, 'create']);
    }

    public function programs(): array|Collection|\Illuminate\Support\Collection
    {
        return EventProgram::query()
            ->with('seminar')
            ->orderByDesc('created_at')
            ->get();
    }
}
