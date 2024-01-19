@extends('layouts.master')

@section('title', 'Lista de Artículos')

@section('titulo', 'RevistApp')

@section('content')

<form method="POST" action="{{ route('bodegas.update', $bodega) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $bodega->nombre }}" required>
    </div>
    <div>
        <label for="ubicacion">Ubicacion:</label>
        <input type="text" id="ubicacion" name="ubicacion" value="{{ $bodega->ubicacion }}" required>
    </div>
    <div>
        <label for="telefono">Telefono:</label>
        <input type="text" id="telefono" name="telefono" value="{{ $bodega->telefono }}" required>
    </div>

    <button type="submit">Editar</button>
    <a href="{{ route('bodegas.index') }}">Volver</a>
</form>
@endsection

@section('footer', '')