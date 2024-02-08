@extends('layout')

@section('title')
    Inicia sesión.
@endsection

@section('h1')
    <h1>Inicia sesión.</h1>
@endsection

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf

        <label for="name">Nombre de usuario:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" value="{{ old('password') }}">
        <br>

        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Recordar login</label>
        <br>

        <input type="submit" value="Iniciar sesión">
    </form>
@endsection
