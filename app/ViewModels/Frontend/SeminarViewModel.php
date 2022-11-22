<?php

declare(strict_types=1);

namespace App\ViewModels\Frontend;

use App\Enums\SeminarEnum;
use App\Models\Seminar;
use Illuminate\Pagination\LengthAwarePaginator;
use Spatie\ViewModels\ViewModel;

class SeminarViewModel extends ViewModel
{
    public function __construct()
    {
        //
    }


    public function seminars(): LengthAwarePaginator
    {
        return Seminar::query()
            ->where('status', '=', SeminarEnum::SEMINAR_CONFIRMED)
            ->join('categories', 'seminars.category_id', '=', 'categories.id')
            ->orderByDesc('seminars.created_at')
            ->paginate(9);
    }
}
