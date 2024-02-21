@extends('layout')

<!-- Title de la página -->
@section('title')
    Mensajes
@endsection

<!-- Portada de la página -->
@section('h1')
    <h1>Mensajes</h1>
@endsection

<!-- Contenido de la página -->
@section('content')
    <ul>
        @foreach ($messages as $message)
            <li>
                <a href="{{ route('messages.show', $message)}}">
                    {{$message->name}} - {{$message->subject}}
                    @if ($message->readed == 0)
                        (Pendiente)
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
@endsection
