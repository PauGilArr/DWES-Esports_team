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

        <label for="date">Fecha de nacimiento:</label>
        <input type="date" name="date" id="date" value="{{ old('date') ? old('date') : $event->date  }}">
        @error('date')
            <br>Error: {{ $message }}
        @enderror
        <br>

        <input type="submit" value="enviar">
    </form>
@endsection
