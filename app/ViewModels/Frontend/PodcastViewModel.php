<?php

declare(strict_types=1);

namespace App\ViewModels\Frontend;

use App\Enums\SeminarEnum;
use App\Models\Podcast;
use App\Models\PodcastOffering;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class PodcastViewModel extends ViewModel
{
    public function __construct()
    {
    }

    public function podcasts(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
         return Podcast::query()
            ->where('status', '=', SeminarEnum::SEMINAR_CONFIRMED)
            ->orderByDesc('created_at')
            ->with(['type', 'offering'])
            ->paginate(6);
    }

    public function offerings(): array|Collection|\Illuminate\Support\Collection
    {
        return PodcastOffering::query()
            ->orderByDesc('created_at')
            ->get();
    }
}
