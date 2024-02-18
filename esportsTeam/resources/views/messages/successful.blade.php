@extends('layout')

@section('title')
    Mensaje enviado correctamente.
@endsection

@section('h1')
    <h1>Mensaje enviado correctamente.</h1>
@endsection

@section('content')
    <a href="{{ route('index') }}">Volver a la página de inicio</a>
@endsection
