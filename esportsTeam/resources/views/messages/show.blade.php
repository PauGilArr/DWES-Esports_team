@extends('layout')

@section('title')
    {{$message->subject}} - Sahara Force India F1 Team
@endsection

@section('content')
<article>
    <div>
        <h2>Nombre: </h2>
        <div>{{$message->name}}</div>
    </div>
    <div>
        <h2>Asunto: </h2>
        <div>{{$message->subject}}</div>
    </div>
    <div>
        <h2>Texto: </h2>
        <p>{{$message->text}}</p>
    </div>
</article>
@endsection
