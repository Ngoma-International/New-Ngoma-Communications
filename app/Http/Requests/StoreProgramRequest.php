<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\EventProgram;
use App\Models\Facilitator;
use App\Models\Seminar;
use App\Rules\SeminarAppointment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;
use Illuminate\Validation\Rules\Unique;

class StoreProgramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'seminar_id' => [
                'required',
                'integer',
                new Exists(Seminar::class, 'id')
            ],
            'facilitator_id' => [
                'required',
                'integer',
                new Exists(Facilitator::class, 'id')
            ],
            'title' => [
                'required',
                'string',
                'min:3',
                new Unique(EventProgram::class, 'title')
            ],
            'date' => [
                'required',
                'date'
            ],
            'start_time' => [
                'required',
                'before:end_time',
                new SeminarAppointment()
            ],
            'end_time' => [
                'required',
                'after:start_time',
                new SeminarAppointment()
            ],
            'image' => [
                'required',
                'image',
                'mimes:jpeg,png,jpg,gif,svg'
            ],
            'description' => [
                'required',
                'string',
                'min:10'
            ]
        ];
    }
}
