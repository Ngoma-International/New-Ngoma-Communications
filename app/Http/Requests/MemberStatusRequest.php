<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Member;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MemberStatusRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'member' => [
                'required',
                Rule::exists(Member::class, 'phone_number')
            ],
            'status' => [
                'required',
                'bool'
            ]
        ];
    }
}
