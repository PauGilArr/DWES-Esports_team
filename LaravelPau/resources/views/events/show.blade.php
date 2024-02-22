@extends('layout')

<!-- Title de la página -->
@section('title')
    {{$event->name}} - Sahara Force India F1 Team
@endsection

<!-- Portada de la página -->
@section('h1')
    <h1>{{$event->name}}:</h1>
@endsection

<!-- Contenido de la página -->
@section('content')
<p>{{ $event->description }}</p>
<ul>
    <li>Localización: {{ $event->location }}</li>
    <li>Fecha: {{ $event->date }}</li>
    <li>Hora: {{ $event->hour }}</li>
    <li>Tipo: {{ $event->type }}</li>
    <li>Etiquetas: {{ $event->tags }}</li>
</ul>
    @auth
        @if ($event->users->contains(Auth::user()))
            <a href="{{ route('events.like', $event)}}">Retirar like</a>
        @else
            <a href="{{ route('events.like', $event)}}">Dar like</a>
        @endif
        @if (Auth::user()->rol == 'admin')
            @if ($event->visible == 0)
                <a href="{{ route('events.make_visible_invisible', $event) }}">Hacer visible</a>
            @else
                <a href="{{ route('events.make_visible_invisible', $event) }}">Hacer invisible</a>
            @endif
            <form action="{{ route('events.destroy', $event)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Borrar evento</button>
            </form>
            <a href="{{ route('events.edit', $event) }}">Editar evento</a>
        @endif
    @endauth
@endsection
