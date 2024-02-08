<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:5', 'max:20', 'unique:users'],
            'email' => ['required', 'string', 'min:5', 'max:20', 'unique:users'],
            'birthday' => ['required', 'date', 'before:today'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }
}
