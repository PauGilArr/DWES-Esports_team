<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MessageRequest extends FormRequest
{
    /**
     * Determina si el usuario está autorizado para hacer esta request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Obtiene las reglas de validación que se aplican a esta request.
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

    /**
     * Obtiene los mensajes de error de las reglas de validación que se aplican a esta request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
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
