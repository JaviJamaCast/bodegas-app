@extends('layouts.master')

@section('title', 'Detalle del Vino')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Detalles del Vino
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $vino->nombre }}</h5>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Tipo:</strong> {{ $vino->descripcion }}</li>
                <li class="list-group-item"><strong>Año:</strong> {{ $vino->anyo }}</li>
                <li class="list-group-item"><strong>Cosecha:</strong> {{ $vino->alcohol }}</li>
                <li class="list-group-item"><strong>Cosecha:</strong> {{ $vino->tipo }}</li>
                <li class="list-group-item"><strong>Fecha de alta:</strong> {{ $vino->created_at->format('d/m/Y H:i') }}</li>
                <li class="list-group-item"><strong>Última actualización:</strong> {{ $vino->updated_at->format('d/m/Y H:i') }}</li>
            </ul>
        </div>
        <div class="card-footer">
            <a href="{{route('bodegas.show', $bodega)}}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection

@section('footer', 'Diputación Foral de Álava')