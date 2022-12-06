<?php

declare(strict_types=1);

namespace App\Rules;

use App\Models\EventProgram;
use App\Models\Seminar;
use Illuminate\Contracts\Validation\Rule;

class SeminarAppointment implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        return EventProgram::query()
            ->where('start_time', '<=', $value)
            ->where('end_time', '>=', $value)
            ->count() === 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'Il y a un evenement organiser durant cette periode.';
    }
}
