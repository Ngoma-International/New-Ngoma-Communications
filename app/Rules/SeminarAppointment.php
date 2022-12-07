<?php

declare(strict_types=1);

namespace App\Rules;

use App\Models\EventProgram;
use Illuminate\Contracts\Validation\Rule;

class SeminarAppointment implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value): bool
    {
        return EventProgram::query()
            ->where('start_time', '<=', $value)
            ->where('end_time', '>=', $value)
            ->count() === 0;
    }

    public function message(): string
    {
        return 'Il y a un événement organiser durant cette période.';
    }
}
