<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodegas</title>
</head>

<body>
    <h1>Lista de bodegas</h1>
    <ul>
        @foreach ($bodegas as $bodega)
        <li>{{ $bodega->nombre}} <a href="{{route('bodegas.show', $bodega)}}">Ver</a> <a href="{{route('bodegas.edit', $bodega)}}">Editar</a>
            <form action="{{ route('bodegas.destroy', $bodega) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
        @endforeach
    </ul>
    <a href="{{route('bodegas.create')}}">Crear</a>

</body>


</html>