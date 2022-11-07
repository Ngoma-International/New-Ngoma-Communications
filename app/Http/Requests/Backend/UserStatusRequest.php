<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'user' => [
                'required',
                'integer',
                Rule::exists(User::class, 'id')
            ],
            'status' => [
                'required',
                'bool'
            ]
        ];
    }
}
