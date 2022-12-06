<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Facilitator;
use App\Models\Seminar;
use App\Rules\SeminarAppointment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;

class UpdateProgramRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
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
                'min:3'
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
            'description' => [
                'required',
                'string',
                'min:10'
            ]
        ];
    }
}
