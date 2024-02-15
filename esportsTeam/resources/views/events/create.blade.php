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

        <label for="twitter">Descripción:</label>
        <textarea name="twitter" id="twitter" cols="30" rows="10">{{ old('twitter') }}</textarea>
        @error('twitter')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="instagram">Localización:</label>
        <textarea name="instagram" id="instagram" cols="30" rows="10">{{ old('instagram') }}</textarea>
        @error('instagram')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="twitch">Fecha:</label>
        <textarea name="twitch" id="twitch" cols="30" rows="10">{{ old('twitch') }}</textarea>
        @error('twitch')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="photo">Hora</label>
        <input type="file" name="photo" id="photo">
        @error('photo')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="photo">Tipo</label>
        <input type="file" name="photo" id="photo">
        @error('photo')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="photo">Etiquetas</label>
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
