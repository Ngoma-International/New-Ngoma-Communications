<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Models\Podcast;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StatusPodcastRequest extends FormRequest
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
            'podcast' => [
                'required',
                'integer',
                Rule::exists(Podcast::class, 'id'),
                $this->exists(Podcast::class)
            ],
            'status' => [
                'required',
                'bool'
            ]
        ];
    }
}
