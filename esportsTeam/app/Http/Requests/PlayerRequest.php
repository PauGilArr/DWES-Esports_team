<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlayerRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'unique:players,name'],
            'age' => ['required', 'numeric', 'min:0'],
            'poles' => ['required', 'numeric'],
            'victories' => ['required', 'numeric'],
            'visibility' => 'boolean',

        ];
    }

    public function messages(): array {
        return [

        ];
    }
}
