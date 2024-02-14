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
    <li>Edad: {{ $event->age }}</li>
    <li>Poles: {{ $event->poles }}</li>
    <li>Victorias: {{ $event->victories }}</li>
    @if ($event->twitter)
        <li>Twitter: {{ $event->twitter }}</li>
    @endif
    @if ($event->instagram)
        <li>Instagram: {{ $event->instagram }}</li>
    @endif
    @if ($event->twitch)
        <li>Twitch: {{ $event->twitch }}</li>
    @endif
    @auth
        @if (Auth::user()->rol == 'admin')
        @endif
    @endauth
</ul>
@endsection
