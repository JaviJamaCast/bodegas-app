@extends('layouts.master')

@section('title', 'Detalle de Bodega')

@section('titulo', 'RevistApp')

@section('content')
<div class="container mt-4">
    <div class="row">
        <!-- Detalles de la Bodega -->
        <div class="col-md-6">
            <div class="card h-100"> <!-- Uso de h-100 para igualar la altura con la columna adyacente -->
                <div class="card-header bg-primary text-white">
                    Detalles de la Bodega
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $bodega->nombre }}</h5>
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
        <div class="col-md-6">
            <h2>Vinos</h2>
            <a href="{{route('vinos.create', $bodega)}}" class="btn btn-primary mb-3">Agregar vino</a>
            <table class="table">
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
@endsection

@section('footer', '')