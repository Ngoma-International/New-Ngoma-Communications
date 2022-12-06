<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend\Seminar;

use App\Models\Seminar;
use App\Models\SeminaryType;
use App\Models\Type;
use App\Models\User;
use App\Rules\SeminarAppointment;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Exists;

class StoreSeminarRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "type_id" => [
                'required',
                'integer',
                new Exists(Type::class, 'id')
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
            "title" => [
                'required',
                'string',
                Rule::unique(Seminar::class, 'title')
            ],
            "sub_title" => [
                'required',
                'string',
                Rule::unique(Seminar::class, 'sub_title')
            ],
            "duration" => [
                'required',
            ],
            "date" => [
                'required',
                'date'
            ],
            "country" => [
                'required',
                'string',
                'min:4'
            ],
            "city" => [
                'required',
                'string',
                'min:3'
            ],
            "prices" => [
                'required',
                'integer',
                'min:4'
            ],
            'image' =>[
                'required',
                'image'
            ],
            "overview" => [
                'required',
                'string',
                'min:30'
            ],
            "participate" => [
                'required',
                'string',
                'min:30'
            ],
            "description" => [
                'required',
                'string',
                'min:30'
            ]
        ];
    }
}
