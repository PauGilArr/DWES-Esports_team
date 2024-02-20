<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Password;

class SignupRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:20', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'birthday' => ['required', 'date', 'before:today'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Este campo es obligatorio.',
            'name.string' => 'Este campo tiene que ser una cadena de texto.',
            'name.min' => 'Este campo tiene que tener como mínimo 3 carácteres.',
            'name.max' => 'Este campo tiene que tener como máximo 20 carácteres',
            'name.unique' => 'Este usuario ya existe',
            'email.required' => 'Este campo es obligatorio.',
            'email.email' => 'El campo tiene que ser un email válido',
            'email.unique' => 'Este usuario ya existe',
            'birthday.required' => 'Este campo es obligatorio.',
            'birthday.date' => 'Este campo tiene que ser una fecha válida ',
            'birthday.before:today' => 'La fecha tiene que ser anterior a hoy.',
            'password.required' => 'Este campo es obligatorio.',
            'password.confirmed' => 'La contraseña puesta en la confirmación de contraseña no es la misma.',
            'password.Password' => 'La contraseña tiene que ser de mínimo 8 carácteres.',
        ];
    }
}
