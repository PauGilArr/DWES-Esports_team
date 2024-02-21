@extends('layout')

<!-- Title de la página -->
@section('title')
    Mi perfil
@endsection

<!-- Portada de la página -->
@section('h1')
    <h1>Mi perfil</h1>
@endsection

<!-- Contenido de la página -->
@section('content')
    <h2>Información general:</h2>
    <ul>
        <li>Nombre de usuario: {{$user->name}}</li>
        <li>Correo electrónico: {{$user->email}}</li>
        <li>Fecha de nacimiento: {{$user->birthday}}</li>
        <li><a href="{{route('users.edit', $user)}}">Editar cuenta</a></li>
    </ul>
@endsection
