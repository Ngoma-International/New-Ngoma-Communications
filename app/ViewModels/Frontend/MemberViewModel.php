<?php

declare(strict_types=1);

namespace App\ViewModels\Frontend;

use App\Enums\SeminarEnum;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Spatie\ViewModels\ViewModel;

class MemberViewModel extends ViewModel
{
    public function __construct()
    {
    }

    public function members(): array|Collection|\Illuminate\Support\Collection
    {
        return User::query()
            ->where('status', '=', SeminarEnum::SEMINAR_CONFIRMED)
            ->orderByDesc('created_at')
            ->with('profile')
            ->get();
    }
}
