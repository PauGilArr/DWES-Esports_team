@extends('layout')

@section('title')
    Añadir evento
@endsection

@section('content')
    <form action="{{ route('messages.store') }}" method="post">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="subject">Asunto:</label>
        <input type="text" name="subject" id="subject" value="{{ old('subject') }}">
        @error('subject')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="text">Texto:</label>
        <textarea name="text" id="text" cols="30" rows="10">{{ old('text') }}</textarea>
        @error('text')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <input type="submit" value="enviar">
    </form>
@endsection
