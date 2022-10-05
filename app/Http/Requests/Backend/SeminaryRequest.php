<?php

declare(strict_types=1);

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SeminaryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
