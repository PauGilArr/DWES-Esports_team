@extends('layout')

@section('title')
    Añadir piloto
@endsection

@section('content')
    <form action="{{ route('players.store') }}" method="post">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="age">Edad:</label>
        <input type="number" name="age" id="age">
        @error('age')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="poles">Poles:</label>
        <input type="number" name="poles" id="poles">
        @error('poles')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="victories">Victorias:</label>
        <input type="number" name="victories" id="victories">
        @error('victories')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="twitter">Twitter:</label>
        <textarea name="twitter" id="twitter" cols="30" rows="10">{{ old('twitter') }}</textarea>
        @error('twitter')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="instagram">Instagram:</label>
        <textarea name="instagram" id="instagram" cols="30" rows="10">{{ old('instagram') }}</textarea>
        @error('instagram')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="twitch">Twitch:</label>
        <textarea name="twitch" id="twitch" cols="30" rows="10">{{ old('twitch') }}</textarea>
        @error('twitch')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="visibility">Visible:</label>
        <input type="checkbox" name="visibility" id="visibility">
        @error('visibility')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <input type="submit" value="enviar">
    </form>
@endsection
