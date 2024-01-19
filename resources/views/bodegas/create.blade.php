<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('bodegas.store') }}" class="mt-3">
        @csrf
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>
        <div>
            <label for="ubicacion">Ubicacion:</label>
            <textarea id="ubicacion" name="ubicacion" required></textarea>
        </div>
        <div>
            <label for="telefono">Telefono:</label>
            <input type="text" id="telefono" name="telefono" required>
        </div>
        <button type="submit">Crear</button>
        <a href="{{ route('bodegas.index') }}">Volver</a>
    </form>
</body>

</html>