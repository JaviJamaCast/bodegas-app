@extends('layouts.master')

@section('title', 'Editar Vino')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Editar Vino
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('vinos.update', ['vino'=>$vino, 'bodega'=>$bodega]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $vino->nombre }}" required>
                </div>
                <div class="form-group">
                    <label for="tipo">Tipo de vino:</label>
                    <select class="form-control" id="tipo" name="tipo" required>
                        <option value="">Seleccione un tipo</option>
                        <option value="tinto" {{ $vino->tipo == 'tinto' ? 'selected' : '' }}>Tinto</option>
                        <option value="blanco" {{ $vino->tipo == 'blanco' ? 'selected' : '' }}>Blanco</option>
                        <option value="rosado" {{ $vino->tipo == 'rosado' ? 'selected' : '' }}>Rosado</option>
                        <option value="espumoso" {{ $vino->tipo == 'espumoso' ? 'selected' : '' }}>Espumoso</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="anyo">Año:</label>
                    <input type="number" class="form-control" id="anyo" name="anyo" value="{{ $vino->anyo }}" required>
                </div>
                <div class="form-group">
                    <label for="alcohol">Alcohol:</label>
                    <input type="number" class="form-control" id="alcohol" name="alcohol" value="{{ $vino->alcohol }}" required>
                </div>
                <div class="form-group">
                    <label for="stock">Descripcion:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" required>{{$vino->descripcion}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary my-4">Editar</button>
                <a href="{{ route('bodegas.show', $bodega) }}" class="btn btn-secondary">Volver</a>
            </form>
        </div>
    </div>
</div>
@endsection

@section('footer', 'Diputación Foral de Álava')