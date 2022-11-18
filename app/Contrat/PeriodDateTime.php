<?php

declare(strict_types=1);

namespace App\Contrat;

use App\Http\Requests\Backend\Seminar\StoreSeminarRequest;

interface PeriodDateTime
{
    public function duration(StoreSeminarRequest $request);
}
