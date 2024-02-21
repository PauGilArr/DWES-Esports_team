<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'description' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'hour' => ['required'],
            'type' => ['required'],
            'tags' => ['required', 'string', 'max:255']
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
            'name.required' => 'Este campo es obligatorio',
            'name.string' => 'Tiene que ser una cadena de texto',
            'name.max' => 'Supera la longitud máxima de 15 caracteres',
            'description.required' => 'Este campo es obligatorio',
            'description.string' => 'Tiene que ser una cadena de texto',
            'description.max' => 'Supera la longitud máxima de 255 caracteres',
            'location.required' => 'Este campo es obligatorio',
            'location.string' => 'Tiene que ser una cadena de texto',
            'location.max' => 'Supera la longitud máxima de 255 caracteres',
            'date.required' => 'Este campo es obligatorio',
            'date.date' => 'Tiene que ser una fecha válida',
            'hour.required' => 'Este campo es obligatorio',
            'type.required' => 'Este campo es obligatorio',
            'tags.required' => 'Este campo es obligatorio',
            'tags.string' => 'Tiene que ser una cadena de texto',
            'tags.max' => 'Supera la longitud máxima de 255 caracteres'
        ];
    }
}
