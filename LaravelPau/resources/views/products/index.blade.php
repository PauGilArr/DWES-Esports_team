@extends('layout')

<!-- Title de la página -->
@section('title')
    Jugadores de  Sahara Force India F1 Team
@endsection

<!-- Portada de la página -->
@section('h1')
    <h1>Nuestros productos</h1>
@endsection

<!-- Contenido de la página -->
@section('content')
    @foreach ($products as $product)
        <div>
            <h2>{{$product->name}}</h2>
            <ul>
                <li>Precio: {{$product->price}}</li>
                <li>Stock: {{$product->stock}}</li>
            </ul>
        </div>
    @endforeach
@endsection
