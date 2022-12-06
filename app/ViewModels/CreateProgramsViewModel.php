<?php

declare(strict_types=1);

namespace App\ViewModels;

use App\Http\Controllers\Admin\programs\EventProgramsAdminController;
use App\Models\Facilitator;
use App\Models\Seminar;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class CreateProgramsViewModel extends ViewModel
{
    public string $indexUrl;

    public function __construct()
    {
        $this->indexUrl = action([EventProgramsAdminController::class, 'index']);
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
