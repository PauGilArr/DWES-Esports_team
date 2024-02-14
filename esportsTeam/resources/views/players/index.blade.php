@extends('layout')

@section('title')
    Próximos eventos de  Sahara Force India F1 Team
@endsection

@section('content')
    @auth
        @foreach ($events as $event)
            <a href="{{ route('events.show', $event)}}">
                <div>
                    <div class="name">{{$event->name}}</div>
                </div>
            </a>
        @endforeach
    @else
        @foreach ($events as $event)
            <div>
                <div class="name">{{$event->name}}</div>
            </div>
        @endforeach
    @endauth
@endsection
