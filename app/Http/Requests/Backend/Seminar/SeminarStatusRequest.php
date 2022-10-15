<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend\Seminar;

use App\Models\Seminar;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SeminarStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'seminar' => [
                'required',
                Rule::exists(Seminar::class, 'id')
            ],
            'status' => [
                'required',
                'boolean',
            ],
        ];
    }
}
