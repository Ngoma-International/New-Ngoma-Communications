<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
                Rule::unique(User::class, 'email')
            ],
            "phone_number" => [
                'required',
                'regex:/^([0-9\s\-\+\(\)]*)$/',
                'min:10',
                Rule::unique(User::class, 'phone_number')
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
            'password' => [
                'required',
                'min:8',
            ],
            "description" => [
                'required',
                'string'
            ]
        ];
    }
}
