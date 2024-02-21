@extends('layout')

<!-- Title de la página -->
@section('title')
    Mensaje enviado correctamente.
@endsection

<!-- Portada de la página -->
@section('h1')
    <h1>Mensaje enviado correctamente.</h1>
@endsection

<!-- Contenido de la página -->
@section('content')
    <a href="{{ route('index') }}">Volver a la página de inicio</a>
@endsection
