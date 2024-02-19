@extends('layout')

@section('title')
    Próximos eventos - Sahara Force India F1 Team
@endsection

@section('h1')
    <h1>Próximos eventos:</h1>
@endsection

@section('content')
    @auth
        @foreach ($events as $event)
            <a href="{{ route('events.show', $event) }}">
                <div>
                    <div class="name">{{ $event->name }}</div>
                    @auth
                        @if (Auth::user()->rol == 'admin')
                            @if ($event->visible == 0)
                                <a href="{{ route('events.make_visible_invisible', $event) }}">Hacer visible</a>
                            @else
                                <a href="{{ route('events.make_visible_invisible', $event) }}">Hacer invisible</a>
                            @endif
                            <a href="{{ route('events.destroy', $event) }}">Borrar evento</a>
                            <a href="{{ route('events.edit', $event) }}">Editar evento</a>
                        @endif
                        @if ($event->users->contains(Auth::user()))
                            <a href="{{ route('events.like', $event)}}">Retirar like</a>
                        @else
                            <a href="{{ route('events.like', $event)}}">Dar like</a>
                        @endif
                    @endauth
                </div>
            </a>
        @endforeach
    @else
        @foreach ($events as $event)
            <div>
                <div class="name">{{ $event->name }}</div>
            </div>
        @endforeach
    @endauth
@endsection
