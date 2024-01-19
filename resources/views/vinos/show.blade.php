<ul>
    <li>Fecha de creación: {{ $vino->created_at }}</li>
    <li>Fecha de última actualización: {{ $vino->updated_at }}</li>
    <li>Nombre: {{ $vino->nombre }}</li>
    <li>Tipo: {{ $vino->tipo }}</li>
    <li>Ubicacion: {{ $vino->cosecha }}</li>

</ul>
<a href="{{route('bodegas.show', $bodega)}}">Volver</a>