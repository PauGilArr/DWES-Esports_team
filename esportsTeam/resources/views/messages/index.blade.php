@extends('layout')

@section('title')
    Mensajes - Sahara Force India F1 Team
@endsection

@section('content')
    <ul>
        @foreach ($messages as $message)
            <li><a href="{{ route('messages.show', $message)}}">{{$message->name}} - {{$message->subject}}</a></li>
        @endforeach
    </ul>
@endsection
