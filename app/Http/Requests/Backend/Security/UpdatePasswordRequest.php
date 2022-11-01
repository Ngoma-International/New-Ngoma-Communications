<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend\Security;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            'old_password'     => ['required'],
            'password'     => ['required', 'min:6', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
    }
}
