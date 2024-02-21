<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserEditRequest extends FormRequest
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
            'birthday' => ['required', 'date', 'before:today'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }

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
