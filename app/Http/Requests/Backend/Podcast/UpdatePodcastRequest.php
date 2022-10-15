<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend\Podcast;

use App\Models\PodcastOffering;
use App\Models\TypePodcast;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePodcastRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'type_podcast_id' => [
                'required',
                Rule::exists(TypePodcast::class, 'id'),
                'integer'
            ],
            'podcast_offering_id' => [
                'required',
                'integer',
                Rule::exists(PodcastOffering::class, 'id')
            ],
            'user_id' => [
                'required',
                'integer',
                Rule::exists(User::class, 'id')
            ],
            'title' => [
                'required',
                'string',
                'max:255',
            ],
            'thumbnail' => [
                'required',
                'image',
                'mimes:jpeg,jpg,png'
            ],
            'images_video' => [
                'required',
                'file',
            ]
        ];
    }
}
