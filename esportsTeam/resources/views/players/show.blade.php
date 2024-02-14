@extends('layout')

@section('title')
    {{$player->name}} - Sahara Force India F1 Team
@endsection

@section('h1')
    <h1>{{$player->name}}</h1>
@endsection

@section('content')
<div>
    <img src="/storage/{{ $player->name }}.png" alt="{{ $player->name }} image">
</div>
<ul>
    <li>Edad: {{ $player->age }}</li>
    <li>Poles: {{ $player->poles }}</li>
    <li>Victorias: {{ $player->victories }}</li>
    @if ($player->twitter)
        <li>Twitter: {{ $player->twitter }}</li>
    @endif
    @if ($player->instagram)
        <li>Instagram: {{ $player->instagram }}</li>
    @endif
    @if ($player->twitch)
        <li>Twitch: {{ $player->twitch }}</li>
    @endif
    @auth
        @if (Auth::user()->rol == 'admin')
            @if ($player->visible == 0)
                <li><a href="{{ route('players.make_visible_invisible', $player) }}">Hacer visible</a></li>
            @else
                <li><a href="">Hacer invisible</a></li>
            @endif
        @endif
    @endauth
</ul>
@endsection
