@extends('layout')

@section('title')
    Añadir piloto
@endsection

@section('h1')
    <h1>Añadir piloto:</h1>
@endsection

@section('content')
    <form action="{{ route('players.store') }}" method="post" enctype="multipart/form-data">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="age">Edad:</label>
        <input type="number" name="age" id="age" value="{{ old('age')}}">
        @error('age')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="poles">Poles:</label>
        <input type="number" name="poles" id="poles" value="{{ old('poles') }}">
        @error('poles')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="wins">Victorias:</label>
        <input type="number" name="wins" id="wins" value="{{ old('wins') }}">
        @error('wins')
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

        <label for="photo">Foto</label>
        <input type="file" name="photo" id="photo">
        @error('photo')
            <br>Error: {{ $message }}
        @enderror
        <br>
        <label for="visible">Visible:</label>
        <input type="checkbox" name="visible" id="visible">
        @error('visible')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <input type="submit" value="enviar">
    </form>
@endsection
