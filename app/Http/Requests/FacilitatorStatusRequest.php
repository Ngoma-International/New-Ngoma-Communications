<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Facilitator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Exists;

class FacilitatorStatusRequest extends FormRequest
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
            'facilitator' => [
                'required',
                'integer',
                new Exists(Facilitator::class, 'id')
            ],
            'status' => [
                'required',
                'bool'
            ]
        ];
    }
}
