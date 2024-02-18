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
        switch ($this->method()) {
            case 'POST':
                $rules = [
                    'name' => ['required', 'string', 'unique:events,name', 'max:15'],
                    'description' => ['required'],
                    'location' => ['required'],
                    'date' => ['required', 'date'],
                    'hour' => ['required'],
                    'type' => ['required'],
                    'tags' => ['required'],
                ];

                break;

            case 'PUT':
                $rules = [
                    'name' => ['required', 'string', 'max:15'],
                    'description' => ['required'],
                    'location' => ['required'],
                    'date' => ['required', 'date'],
                    'hour' => ['required'],
                    'type' => ['required'],
                    'tags' => ['required'],
                ];

                break;
        }
        return $rules;
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del evento es obligatorio',
            'name.string' => 'Tiene que ser una cadena de texto',
            'name.unique' => 'Ese nombre de evento ya existe',
            'name.max' => 'Supera la longitud máxima de 15 caracteres',
            'description.required' => 'La descripcción del evento es obligatoria',
            'location.required' => 'la localización del evento es obligatoria',
            'date.required' => 'La fecha del evento es obligatoria',
            //'date.date' => 'es obligatorio',
            'hour.required' => 'La hora a la que se hace el evento es obligatoria',
            'type.required' => 'El tipo de evento es obligatorio',
            //'tags.required' => 'es obligatorio'
        ];
    }
}
