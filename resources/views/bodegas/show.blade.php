@extends('layouts.master')

@section('title', 'Detalle de Bodega')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-4">
        <h1 class="h2">Detalle de la Bodega: {{ $bodega->nombre }}</h1>
        <p class="text-muted">Explora los detalles y vinos de la bodega</p>
    </div>

    <div class="row justify-content-center">
        <!-- Detalles de la Bodega -->
        <div class="col-lg-5 mb-4">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    Información de la Bodega
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Fecha de creación:</strong> {{ $bodega->created_at->format('d/m/Y H:i') }}</li>
                        <li class="list-group-item"><strong>Última actualización:</strong> {{ $bodega->updated_at->format('d/m/Y H:i') }}</li>
                        <li class="list-group-item"><strong>Ubicación:</strong> {{ $bodega->ubicacion }}</li>
                        <li class="list-group-item"><strong>Teléfono:</strong> {{ $bodega->telefono }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="{{route('bodegas.index')}}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>

        <!-- Lista de Vinos en una Tabla -->
        <div class="col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header bg-success text-white">
                    Vinos Disponibles
                </div>
                <div class="card-body">
                    <a href="{{route('vinos.create', $bodega)}}" class="btn btn-primary mb-3">Agregar vino</a>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Tipo</th>
                                    <th>Cosecha</th>
                                    <th>Precio</th>
                                    <th>Stock</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bodega->vinos as $vino)
                                <tr>
                                    <td>{{ $vino->nombre }}</td>
                                    <td>{{ $vino->tipo }}</td>
                                    <td>{{ $vino->cosecha }}</td>
                                    <td>{{ $vino->precio }}</td>
                                    <td>{{ $vino->stock }}</td>
                                    <td>
                                        <a href="{{route('vinos.show', ['vino'=>$vino,'bodega'=>$bodega])}}" class="btn btn-sm btn-outline-primary">Ver</a>
                                        <a href="{{route('vinos.edit', ['vino'=>$vino,'bodega'=>$bodega])}}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                        <form method="POST" action="{{route('vinos.destroy',['vino'=>$vino,'bodega'=>$bodega])}}" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Borrar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer', 'Diputación Foral de Álava')