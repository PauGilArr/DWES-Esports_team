<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserEditRequest extends FormRequest
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
            'birthday' => ['required', 'date', 'before:today'],
            'password' => ['required', 'confirmed', Password::defaults()],
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
            'birthday.required' => 'Este campo es obligatorio.',
            'birthday.date' => 'Este campo tiene que ser una fecha válida ',
            'birthday.before' => 'La fecha tiene que ser anterior a hoy.',
            'password.required' => 'Este campo es obligatorio.',
            'password.confirmed' => 'La contraseña puesta en la confirmación de contraseña no es la misma.',
            'password.Password' => 'La contraseña tiene que ser de mínimo 8 carácteres.',
        ];
    }
}
