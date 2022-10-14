<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => [
                'required',
                'string',
                'min:3'
            ],
            "firstname" => [
                'required',
                'string',
                'min:3'
            ],
            "email" => [
                'required',
                'email',
                'regex:/(.+)@(.+)\.(.+)/i',
            ],
            "phone_number" => [
                'required',
                'regex:/^([0-9\s\-\+\(\)]*)$/',
                'min:10',
            ],
            "profession" => [
                'required',
                'string',
                'min:4'
            ],
            "role" => [
                'required',
                'int',
                Rule::in('1', '2', '3')
            ],
            "images" => [
                'required',
                'image',
                'mimes:jpeg,jpg,png'
            ],
            "description" => [
                'nullable',
                'string'
            ]
        ];
    }
}
