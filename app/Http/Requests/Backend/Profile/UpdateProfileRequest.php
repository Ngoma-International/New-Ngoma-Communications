<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string'
            ],
            'firstname' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'email',
                'regex:/(.+)@(.+)\.(.+)/i'
            ],
            'phone_number' => [
                'required',
                'regex:/^([0-9\s\-\+\(\)]*)$/',
                'min:10'
            ],
            'description' => [
                'nullable',
            ],
            'birthdays' => [
                'required',
                'date'
            ],
            'country' => [
                'required',
                'string'
            ],
            'city' => [
                'required',
                'string'
            ],
            'town' => [
                'required',
                'string'
            ],
            'enterprise' => [
                'required',
                'string'
            ],
            'role_enterprise' => [
                'required',
                'string'
            ],
            'department' => [
                'required',
                'string'
            ],
            'sector' => [
                'required',
                'string'
            ]
        ];
    }
}
