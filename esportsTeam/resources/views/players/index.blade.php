@extends('layout')

@section('title')
    Jugadores de  Sahara Force India F1 Team
@endsection

@section('h1')
    <h1>Nuestros jugadores:</h1>
@endsection

@section('content')
    @auth
        @foreach ($players as $player)
            <a href="{{ route('players.show', $player)}}">
                <div>
                    <img src="/storage/{{ $player->name }}.png" alt="Imagen de {{ $player->name }}">
                    <div class="name">{{ $player->name }}</div>
                </div>
            </a>
            @if (Auth::user()->rol == 'admin')
                @if ($player->visible == 0)
                    <li><a href="{{ route('players.make_visible_invisible', $player) }}">Hacer visible</a></li>
                @else
                    <li><a href="{{ route('players.make_visible_invisible', $player) }}">Hacer invisible</a></li>
                @endif
            @endif
        @endforeach
    @else
        @foreach ($players as $player)
            <div>
                <img src="/storage/{{ $player->name }}.png" alt="Imagen de {{ $player->name }}">
                <div class="name">{{$player->name}}</div>
            </div>
        @endforeach
    @endauth
@endsection
