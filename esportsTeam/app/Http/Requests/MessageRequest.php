<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:15'],
            'subject' => ['required', 'string', 'max:10'],
            'text' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Es obligatorio escribir tu nombre',
            'name.string' => 'El campo tiene que ser una cadena de texto',
            'name.max' => 'El campo solo puede contener hasta 15 carácteres',
            'subject.required' => 'Es obligatorio escribir el asunto',
            'subject.string' => 'El campo tiene que ser una cadena de texto',
            'subject.max' => 'El campo solo puede contener hasta 10 carácteres',
            'text.required' => 'Es obligatorio escribir el texto',
            'text.string' => 'El campo tiene que ser una cadena de texto',
            'text.max' => 'El campo solo puede contener hasta 255 carácteres',
        ];
    }
}
