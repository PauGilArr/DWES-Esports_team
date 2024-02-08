@extends('layout')

@section('title')
    Mi perfil
@endsection

@section('h1')
    <h1>Mi perfil</h1>
@endsection

@section('content')
    <h2>Información general:</h2>
    <ul>
        <li>Nombre de usuario: {{$user->name}}</li>
        <li>Correo electrónico: {{$user->email}}</li>
        <li>Fecha de nacimiento: {{$user->birthday}}</li>
    </ul>
@endsection
