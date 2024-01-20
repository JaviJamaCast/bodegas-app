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
                    <div class="mb-3">
                        <a href="{{ route('bodegas.edit', $bodega) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Editar</a>
                        <form action="{{ route('bodegas.destroy', $bodega) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i> Eliminar</button>
                        </form>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Nombre:</strong> {{ $bodega->nombre }}</li>
                        <li class="list-group-item"><strong>Direccion:</strong> {{ $bodega->direccion }}</li>
                        <li class="list-group-item"><strong>Email:</strong> {{ $bodega->email }}</li>
                        <li class="list-group-item"><strong>Descripcion:</strong> {{ $bodega->descripcion }}</li>
                        <li class="list-group-item"><strong>Persona de contacto:</strong> {{ $bodega->contacto_persona }}</li>
                        <li class="list-group-item"><strong>Año de fundacion:</strong> {{ $bodega->anyo_fundacion }}</li>
                        <li class="list-group-item"><strong>Ubicación:</strong> {{ $bodega->ubicacion }}</li>
                        <li class="list-group-item"><strong>Teléfono:</strong> {{ $bodega->telefono }}</li>
                        <li class="list-group-item">
                            <strong>Dispone de Restaurante:</strong>
                            {{ $bodega->disp_restaurante ? 'Sí' : 'No' }}
                        </li>
                        <li class="list-group-item">
                            <strong>Dispone de Hotel:</strong>
                            {{ $bodega->disp_hotel ? 'Sí' : 'No' }}
                        </li>
                        <li class="list-group-item"><strong>Alta:</strong> {{ $bodega->created_at->format('d/m/Y H:i') }}</li>
                        <li class="list-group-item"><strong>Última actualización:</strong> {{ $bodega->updated_at->format('d/m/Y H:i') }}</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="{{route('bodegas.index')}}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
        @if ($bodega->vinos->isNotEmpty())
        <!-- Lista de Vinos en una Tabla -->
        <div class="col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header bg-success text-white">
                    Vinos Disponibles
                </div>
                <div class="card-body">
                    <a href="{{route('vinos.create', $bodega)}}" class="btn btn-primary mb-3">Agregar vino</a>
                    <div class="table-responsive"> <!-- Clase para hacer la tabla desplazable horizontalmente -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="w-15">Nombre</th>
                                    <th class="w-25">Descripcion</th>
                                    <th class="w-10">Año</th>
                                    <th class="w-20">Alcohol %</th>
                                    <th class="w-20">Tipo</th>
                                    <th class="w-10">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bodega->vinos as $vino)
                                <tr>
                                    <td>{{ $vino->nombre }}</td>
                                    <td>
                                        <div data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $vino->descripcion }}">
                                            {{ Str::limit($vino->descripcion, 50) }}
                                        </div>
                                    </td>
                                    <td>{{ $vino->anyo }}</td>
                                    <td>{{ $vino->alcohol }}</td>
                                    <td>{{ $vino->tipo }}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Acciones">
                                            <a href="{{route('vinos.show', ['vino'=>$vino,'bodega'=>$bodega])}}" class="btn btn-outline-primary btn-sm me-1">Ver</a>
                                            <a href="{{route('vinos.edit', ['vino'=>$vino,'bodega'=>$bodega])}}" class="btn btn-outline-secondary btn-sm me-1">Editar</a>
                                            <form method="POST" action="{{route('vinos.destroy',['vino'=>$vino,'bodega'=>$bodega])}}" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm">Borrar</button>
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-center" style="min-height: 200px;">
            <div class="alert alert-warning" role="alert">
                <h1 class="alert-heading">¡No hay vinos!</h1>
                <p>Prueba a crear uno.</p>
                <hr>
                <a class="btn btn-primary btn-lg" href="{{route('vinos.create', $bodega)}}" role="button">Crear Vino</a>
            </div>
        </div>
        @endif

    </div>
    @endsection

    @section('footer', 'Diputación Foral de Álava')