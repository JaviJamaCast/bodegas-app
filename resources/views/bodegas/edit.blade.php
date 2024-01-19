@extends('layouts.master')

@section('title', 'Lista de Artículos')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Editar Bodega
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('bodegas.update', $bodega) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $bodega->nombre }}" required>
                </div>
                <div class="form-group">
                    <label for="ubicacion">Ubicación:</label>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $bodega->ubicacion }}" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $bodega->telefono }}" required>
                </div>
                <button type="submit" class="btn btn-primary my-4">Editar</button>
                <a href="{{ route('bodegas.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer', 'Diputación Foral de Álava')