<?php

declare(strict_types=1);

namespace App\ViewModels\Frontend;

use App\Enums\SeminarEnum;
use App\Models\Seminar;
use Spatie\ViewModels\ViewModel;

class ShowSeminarFrontend extends ViewModel
{
    public function __construct(
        public Seminar $seminar
    ) {
    }

    public function seminar(): Seminar
    {
        $seminar = Seminar::query()
            ->where('id', '=', $this->seminar->id)
            ->where('status', '=', SeminarEnum::SEMINAR_CONFIRMED)
            ->with('seminarType')
            ->first();
        return $seminar->load([
            'category',
            'user'
        ]);
    }
}
