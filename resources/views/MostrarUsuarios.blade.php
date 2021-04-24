<table border="1">
    <tr>
        <th>Tipo_de_usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Contraseña</th>
        <th>Telefono</th>
        <th>dni</th>
        <th>Compañia</th>
    </tr>
@foreach ($resultados as $usario)
        <tr>
            <th>{{$usario["tipo_usuario"]}}</th>
            <th>{{$usario["nombre_usuario"]}}</th>
            <th>{{$usario["Apellido_usuario"]}}</th>
            <th>{{$usario["Contraseña"]}}</th>
            <th>{{$usario["telefono"]}}</th>
            <th>{{$usario["dni"]}}</th>
            <th>{{$usario["nombre_compañia"]}}</th>
        </tr>
        @endforeach

</table>
