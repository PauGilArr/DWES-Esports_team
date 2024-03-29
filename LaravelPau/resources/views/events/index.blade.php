@extends('layout')

<!-- Title de la página -->
@section('title')
    Próximos eventos - Sahara Force India F1 Team
@endsection

<!-- Portada de la página -->
@section('h1')
    <h1>Próximos eventos:</h1>
@endsection

<!-- Contenido de la página -->
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
                            <form action="{{ route('events.destroy', $event)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit">Borrar evento</button>
                            </form>
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
