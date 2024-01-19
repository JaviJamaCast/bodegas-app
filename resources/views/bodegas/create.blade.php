@extends('layouts.master')

@section('title', 'Lista de Artículos')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Crear Nueva Bodega
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('bodegas.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="ubicacion">Ubicación:</label>
                    <textarea class="form-control" id="ubicacion" name="ubicacion" required></textarea>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" required>
                </div>
                <button type="submit" class="btn btn-primary my-4">Crear</button>
                <a href="{{ route('bodegas.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer', '')