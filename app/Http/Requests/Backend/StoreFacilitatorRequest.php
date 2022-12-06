<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend;

use App\Models\Facilitator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Unique;

class StoreFacilitatorRequest extends FormRequest
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
            'username' => [
                'required',
                'string',
                'min:3'
            ],
            'firstname' => [
                'required',
                'string',
                'min:3'
            ],
            'organisation' => [
                'required',
                'string',
                'min:3'
            ],
            'position' => [
                'required',
                'string',
                'min:3'
            ],
            'email' => [
                'required',
                'email:rfc,dns',
                new Unique(Facilitator::class, 'email')
            ],
            'phone' => [
                'required',
                'min:10',
                new Unique(Facilitator::class, 'phone')
            ],
            'country' => [
                'required',
                'string',
                'min:3'
            ],
            'description' => [
                'required',
                'string',
                'min:10'
            ],
            'image' => [
                'required',
                'image'
            ]
        ];
    }
}
