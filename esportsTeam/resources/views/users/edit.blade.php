@extends('layout')

@section('title')
    Editar datos de cuenta - Sahara Force India F1 Team
@endsection

@section('h1')
    <h1>Editar datos de cuenta:</h1>
@endsection

@section('content')
    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('put')

        <label for="birthday">Fecha de nacimiento:</label>
        <input type="date" name="birthday" id="birthday" value="{{ old('birthday') ? old('birthday') : $user->birthday }}">
        @error('birthday')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="password">Nueva contraseña:</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
        @error('password')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="password_confirmation">Repite la contraseña:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation') }}">
        @error('password_confirmation')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <input type="submit" value="Crear cuenta">
    </form>
@endsection
