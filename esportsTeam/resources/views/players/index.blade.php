@extends('layout')

@section('title')
    Jugadores de  Sahara Force India F1 Team
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
        @endforeach
    @else
        @foreach ($players as $player)
            <div>
                <div class="name">{{$player->name}}</div>
            </div>
        @endforeach
    @endauth
@endsection
