@extends('layout')

@section('title')
    Añadir evento
@endsection

@section('title')
    <h1>Añadir evento:</h1>
@endsection

@section('content')
    <form action="{{ route('events.store') }}" method="post">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="description">Descripción:</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>
        @error('description')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="location">Localización:</label>
        <textarea name="location" id="location" cols="30" rows="10">{{ old('location') }}</textarea>
        @error('location')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="date">Fecha:</label>
        <input type="date" name="date" id="date" value="{{ old('date')}}">
        @error('date')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="hour">Hora</label>
        <input type="time" name="hour" id="hour" value="{{ old('hour')}}">
        @error('hour')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="type">Tipo</label>
        <select name="type" id="type">
            <option value="official" {{ "official"==old('type') ? 'selected' : '' }}>Oficial</option>
            <option value="exhibition" {{ "exhibition"==old('type') ? 'selected' : '' }}>Exhibición</option>
            <option value="charity" {{ "charity"==old('type') ? 'selected' : '' }}>Caridad</option>
        </select>
        @error('type')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="tags">Etiquetas</label>
        <textarea name="tags" id="tags" cols="30" rows="10">{{ old('tags') }}</textarea>
        @error('tags')
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
