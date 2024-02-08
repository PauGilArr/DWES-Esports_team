@extends('layout')

@section('title')
    ¡Regístrate!
@endsection

@section('h1')
    <h1>Regístrate.</h1>
@endsection

@section('content')
    <form action="{{ route('signup') }}" method="POST">
        @csrf

        <label for="name">Nombre de usuario:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="email">Correo electrónico:</label>
        <input type="text" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="birthday">Fecha de nacimiento:</label>
        <input type="date" name="birthday" id="birthday" value="{{ old('birthday') }}">
        @error('birthday')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="password">Contraseña:</label>
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
