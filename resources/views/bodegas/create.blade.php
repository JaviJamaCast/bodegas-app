@extends('layouts.master')

@section('title', 'Lista de Artículos')

@section('titulo', 'RevistApp')

@section('content')
<form method="POST" action="{{ route('bodegas.store') }}">
    @csrf
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
    </div>
    <div>
        <label for="ubicacion">Ubicacion:</label>
        <textarea id="ubicacion" name="ubicacion" required></textarea>
    </div>
    <div>
        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono" required>
    </div>
    <button type="submit">Crear</button>
    <a href="{{ route('bodegas.index') }}">Volver</a>
</form>
@endsection

@section('footer', '')