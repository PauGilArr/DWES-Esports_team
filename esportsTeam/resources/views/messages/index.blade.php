@extends('layout')

@section('title')
    Mensajes
@endsection

@section('h1')
    <h1>Mensajes</h1>
@endsection

@section('content')
    <ul>
        @foreach ($messages as $message)
            <li>
                <a href="{{ route('messages.show', $message)}}">
                    {{$message->name}} - {{$message->subject}}
                    @if ($message->readed == 0)
                        (Pendiente)
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
@endsection
