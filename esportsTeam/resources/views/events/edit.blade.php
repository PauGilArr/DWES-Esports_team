@extends('layout')

@section('title')
    Editar evento
@endsection

@section('title')
    <h1>Editar evento:</h1>
@endsection

@section('content')
    <form action="{{ route('events.update', $event) }}" method="post">
        @csrf
        @method('put')

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="{{ old('name') ? old('name') : $event->name  }}">
        @error('name')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="description">Descripción:</label>
        <textarea name="description" id="description" cols="30" rows="10">{{ old('description') ? old('description') : $event->description  }}</textarea>
        @error('description')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="location">Localización:</label>
        <textarea name="location" id="location" cols="30" rows="10">{{ old('location') ? old('location') : $event->location  }}</textarea>
        @error('location')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="date">Fecha:</label>
        <input type="date" name="date" id="date" value="{{ old('date') ? old('date') : $event->date  }}">
        @error('date')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="hour">Hora</label>
        <input type="time" name="hour" id="hour" value="{{ old('hour') ? old('hour') : $event->hour  }}">
        @error('hour')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="type">Tipo</label>
        <select name="type" id="type">
            <option value="official" {{ "official"==old('type') || "official"==$event->type ? 'selected' : '' }}>Oficial</option>
            <option value="exhibition" {{ "exhibition"==old('type') || "exhibition"==$event->type ? 'selected' : '' }}>Exhibición</option>
            <option value="charity" {{ "charity"==old('type') || "charity"==$event->type ? 'selected' : '' }}>Caridad</option>
        </select>
        @error('type')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <label for="tags">Etiquetas</label>
        <textarea name="tags" id="tags" cols="30" rows="10">{{ old('tags')  ? old('tags') : $event->tags  }}</textarea>
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
