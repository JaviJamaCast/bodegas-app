@extends('layouts.master')

@section('title', 'Crear Vino')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Crear Vino
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('vinos.store', $bodega) }}">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo:</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" required>
                </div>
                <div class="form-group">
                    <label for="cosecha">Cosecha:</label>
                    <input type="text" class="form-control" id="cosecha" name="cosecha" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio:</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>
                <div class="form-group">
                    <label for="stock">Stock:</label>
                    <input type="number" class="form-control" id="stock" name="stock" required>
                </div>
                <button type="submit" class="btn btn-primary my-4">Crear</button>
                <a href="{{ route('bodegas.index') }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer', 'Diputación Foral de Álava')