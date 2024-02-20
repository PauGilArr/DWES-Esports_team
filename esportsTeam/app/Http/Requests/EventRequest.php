<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
            'description' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'date' => ['required', 'date'],
            'hour' => ['required'],
            'type' => ['required'],
            'tags' => ['required', 'string', 'max:255']
        ];
    }

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
