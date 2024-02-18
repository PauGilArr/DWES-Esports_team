@extends('layout')

@section('title')
    {{$event->name}} - Sahara Force India F1 Team
@endsection

@section('h1')
    <h1>{{$event->name}}</h1>
@endsection

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
    @endauth
@endsection
