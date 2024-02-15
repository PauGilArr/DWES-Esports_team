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
            'poles' => ['required', 'numeric', 'min:0'],
            'wins' => ['required', 'numeric', 'min:0'],
            'photo' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre del jugador es obligatorio',
            'name.unique' => 'Ese nombre de jugador ya existe',
            'age.required' => 'La edad del jugador es obligatorio',
            'age.numeric' => 'La edad del jugador tiene que ser un número',
            'age.min' => 'La edad del jugador no puede ser menor que 0',
            'poles.required' => 'El número de poles del jugador es obligatorio',
            'poles.numeric' => 'El número de poles del jugador tiene que ser un número',
            'poles.min' => 'El número de poles del jugador no puede ser menor que 0',
            'wins.required' => 'El número de victorias del jugador es obligatorio',
            'wins.numeric' => 'El número de victorias del jugador tiene que ser un número',
            'wins.min' => 'El número de victorias del jugador no puede ser menor que 0',
            'photo.required' => 'La foto del jugador es obligatoria'
        ];
    }
}
