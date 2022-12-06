<?php

namespace App\Http\Requests\Backend;

use App\Models\Collective;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;

class CollectiveStatusRequest extends FormRequest
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
            'collective' => [
                'required',
                new Exists(Collective::class, 'organisation_register_number')
            ],
            'status' => [
                'required',
                'bool'
            ]
        ];
    }
}
