@extends('layout')

@section('title')
    Jugadores del equipo Sahara Force India F1 Team
@endsection

@section('content')
    @auth
        @foreach ($players as $player)
            <a href="{{ route('players.show', $player)}}">
                <div>
                    <img src="/storage/{{ $player->name }}.png" alt="{{ $player->name }} image">
                    <div class="name">{{$player->name}}</div>
                </div>
            </a>
        @endforeach
    @else
        @foreach ($players as $player)
            <div>
                <img src="/storage/{{ $player->name }}.png" alt="{{ $player->name }} image">
                <div class="name">{{$player->name}}</div>
            </div>
        @endforeach
    @endauth
@endsection
