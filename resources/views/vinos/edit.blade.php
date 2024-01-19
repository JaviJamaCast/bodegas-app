<form method="POST" action="{{ route('vinos.update', ['vino'=>$vino,'bodega'=>$bodega]) }}">
    @csrf
    @method('PUT')
    <div>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="{{ $vino->nombre }}" required>
    </div>
    <div>
        <label for="tipo">Tipo:</label>
        <input type="text" id="tipo" name="tipo" value="{{ $vino->tipo }}" required>
    </div>
    <div>
        <label for="cosecha">Cosecha:</label>
        <input type="text" id="cosecha" name="cosecha" value="{{ $vino->cosecha}}" required>
    </div>
    <div>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" value="{{ $vino->precio}}" required>
    </div>
    <div>
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" value="{{ $vino->stock}}" required>
    </div>

    <button type="submit">Editar</button>
    <a href="{{ route('bodegas.show', $bodega) }}">Volver</a>
</form>