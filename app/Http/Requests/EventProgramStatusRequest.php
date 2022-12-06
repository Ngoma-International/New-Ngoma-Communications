<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\EventProgram;
use App\Models\Member;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;

class EventProgramStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            'program' => [
                'required',
                new Exists(EventProgram::class, 'id')
            ],
            'status' => [
                'required',
                'bool'
            ]
        ];
    }
}
