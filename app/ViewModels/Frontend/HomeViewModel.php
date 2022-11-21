<?php

declare(strict_types=1);

namespace App\ViewModels\Frontend;

use App\Enums\SeminarEnum;
use App\Models\PodcastOffering;
use App\Models\Seminar;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class HomeViewModel extends ViewModel
{
    public function __construct()
    {
    }

    public function seminars(): array|Collection|\Illuminate\Support\Collection
    {
        return Seminar::query()
            ->where('status', '=', SeminarEnum::SEMINAR_CONFIRMED)
            ->inRandomOrder()
            ->limit(4)
            ->get();
    }
}
