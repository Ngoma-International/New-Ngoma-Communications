<?php

declare(strict_types=1);

namespace App\ViewModels\Frontend;

use App\Models\Seminar;
use Spatie\ViewModels\ViewModel;

class ShowSeminarFrontend extends ViewModel
{
    public function __construct(
        public readonly Seminar $seminar
    ) {
    }

    public function seminar(): Seminar
    {
        return $this
            ->seminar
            ->load([
                'category',
                'seminarType',
                'user'
            ]);
    }
}
