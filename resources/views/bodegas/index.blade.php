@extends('layouts.master')

@section('title', 'Lista de Bodegas')

@section('content')
<div class="container mt-4">
    @if ($bodegas->isNotEmpty())
    <h1 class="mb-4">Lista de Bodegas</h1>
    <a href="{{ route('bodegas.create') }}" class="btn btn-success mb-3">Crear Nueva Bodega</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">Ubicacion</th>
                    <th scope="col" class="text-center">Telefono</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bodegas as $bodega)
                <tr>
                    <td class="align-center text-center">{{ $bodega->nombre }}</td>
                    <td class="align-center text-center">{{ $bodega->ubicacion }}</td>
                    <td class="align-center text-center">{{ $bodega->telefono }}</td>
                    <td class="align-center text-center">{{ $bodega->email }}</td>


                    <td class="text-center">
                        <a href="{{ route('bodegas.show', $bodega) }}" class="btn btn-sm btn-primary mr-1 mx-4">Ver</a>
                        <a href="{{ route('bodegas.edit', $bodega) }}" class="btn btn-sm btn-warning mr-1 mx-4">Editar</a>
                        <form action="{{ route('bodegas.destroy', $bodega) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger mx-4">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="d-flex flex-column justify-content-center align-items-center" style="min-height: 200px;">
        <div class="alert alert-warning" role="alert">
            <h1 class="alert-heading">¡No hay bodegas!</h1>
            <p>Prueba a crear una.</p>
            <hr>
            <a class="btn btn-primary btn-lg" href="{{ route('bodegas.create') }}" role="button">Crear Bodega</a>
        </div>
    </div>

    @endif
</div>
@endsection

@section('footer', 'Diputación Foral de Álava')