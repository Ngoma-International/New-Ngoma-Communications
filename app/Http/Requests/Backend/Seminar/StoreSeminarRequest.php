<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend\Seminar;

use App\Models\Category;
use App\Models\Seminar;
use App\Models\SeminaryType;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSeminarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "category_id" => [
                'required',
                'integer',
                Rule::exists(Category::class, 'id')
            ],
            "seminary_type_id" => [
                'required',
                'integer',
                Rule::exists(SeminaryType::class, 'id')
            ],
            "user_id" => [
                'required',
                'integer',
                Rule::exists(User::class, 'id')
            ],
            "name" => [
                'required',
                'string',
                Rule::unique(Seminar::class, 'name')
            ],
            "country" => [
                'required',
                'string',
                'min:4'
            ],
            "city" => [
                'required',
                'string',
                'min:4'
            ],
            "prices" => [
                'required',
                'integer',
                'min:4'
            ],
            "start_time" => [
                'required',
                'date_format:h:i A'
            ],
            "end_time" => [
                'required',
                'date_format:h:i A',
                'after:start_time',
            ],
            "date" => [
                'required',
                'date'
            ],
            "address_seminary" => [
                'required',
                'string',
                'min:4'
            ],
            "attend" => [
                'nullable',
                'string',
                'min:30'
            ],
            "overview" => [
                'nullable',
                'string',
                'min:30'
            ],
            "description" => [
                'required',
                'string',
                'min:30'
            ],
            "images" => [
                'required',
                'image',
                'mimes:jpeg,jpg,png'
            ]
        ];
    }
}
