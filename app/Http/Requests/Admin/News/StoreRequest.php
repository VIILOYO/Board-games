<?php

namespace App\Http\Requests\Admin\News;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $rules =  [
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'url' => ['required', 'string', 'unique:news', 'min:3', 'max:255'],
            'content' => ['required', 'string', 'min:10'],
        ];

        return $rules;
    }
}
