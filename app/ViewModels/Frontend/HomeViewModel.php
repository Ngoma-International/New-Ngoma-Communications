<?php

declare(strict_types=1);

namespace App\ViewModels\Frontend;

use App\Enums\SeminarEnum;
use App\Models\Seminar;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class HomeViewModel extends ViewModel
{
    public function __construct()
    {
    }

    public function seminars(): LengthAwarePaginator
    {
        return Seminar::query()
            ->where('status', '=', SeminarEnum::SEMINAR_CONFIRMED)
            ->inRandomOrder()
            ->paginate();
    }
}
