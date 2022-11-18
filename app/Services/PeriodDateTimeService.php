<?php

declare(strict_types=1);

namespace App\Services;

use App\Contrat\PeriodDateTime;
use App\Http\Requests\Backend\Seminar\StoreSeminarRequest;
use Spatie\Period\Period;
use Spatie\Period\Precision;

class PeriodDateTimeService implements PeriodDateTime
{
    public function duration(StoreSeminarRequest $request): int
    {
        $duration = Period::make(
            $request->input('start_time'),
            $request->input('end_time'),
            Precision::HOUR()
        );
        return $duration->length();
    }
}
