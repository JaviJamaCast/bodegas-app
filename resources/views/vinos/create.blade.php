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
                    <label for="descripcion">Descripcion:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                </div>
                <div class="form-group">
                    <label for="anyo">Año:</label>
                    <input type="text" class="form-control" id="anyo" name="anyo" required>
                </div>
                <div class="form-group">
                    <label for="alcohol">Alcohol:</label>
                    <input type="number" class="form-control" id="alcohol" name="alcohol" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo de vino:</label>
                    <select class="form-control" id="tipo" name="tipo" required>
                        <option value="">Seleccione un tipo</option>
                        <option value="tinto">Tinto</option>
                        <option value="blanco">Blanco</option>
                        <option value="rosado">Rosado</option>
                        <option value="espumoso">Espumoso</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary my-4">Crear</button>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer', 'Diputación Foral de Álava')