<ul>
    <li>Fecha de creación: {{ $bodega->created_at }}</li>
    <li>Fecha de última actualización: {{ $bodega->updated_at }}</li>
    <li>Nombre: {{ $bodega->nombre }}</li>
    <li>Ubicacion: {{ $bodega->ubicacion }}</li>
    <li>Telefono: {{ $bodega->telefono }}</li>

</ul>

<h2>Vinos</h2>
<a href="{{route('vinos.create', $bodega)}}">Agregar vino</a>
<ul>
    @foreach ($bodega->vinos as $vino)
    <li>
        <span>{{ $vino->nombre }}</span>
        <span>{{ $vino->tipo }}</span>
        <span>{{ $vino->cosecha }}</span>
        <span>{{ $vino->precio }}</span>
        <span>{{ $vino->stock }}</span>
        <a href="{{route('vinos.show', ['vino'=>$vino,'bodega'=>$bodega])}}">Ver vino</a>
        <a href="{{route('vinos.edit', ['vino'=>$vino,'bodega'=>$bodega])}}">Editar</a>
        <form method="POST" action="{{route('vinos.destroy',['vino'=>$vino,'bodega'=>$bodega])}}">
            @csrf
            @method('DELETE')
            <button type="submit">Borrar</button>
        </form>
    </li>
    @endforeach
</ul>
<a href="{{route('bodegas.index')}}">Volver</a>