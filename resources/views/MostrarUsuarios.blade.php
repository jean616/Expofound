@extends("layout")
@section("contenido")
<table border="1">
    <tr>
        <th>Id</th>
        <th>Tipo_de_usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Contraseña</th>
        <th>Telefono</th>
        <th>dni</th>
        <th>Compañia</th>
        <th>&nbsp;</th>
    </tr>
@foreach ($resultados as $usrio)
        <tr>
            <th>{{$usrio["id"]}}</th>
            <th>{{$usrio["tipo_usuario"]}}</th>
            <th>{{$usrio["nombre_usuario"]}}</th>
            <th>{{$usrio["Apellido_usuario"]}}</th>
            <th>{{$usrio["Contraseña"]}}</th>
            <th>{{$usrio["telefono"]}}</th>
            <th>{{$usrio["dni"]}}</th>
            <th>{{$usrio["nombre_compañia"]}}</th>
            <td><a href="/actualizar-Usuarios/{{$usrio["id"]}}">actualizar</a></td>
            <td><a href="/EliminarUsuario/{{$usrio["id"]}}" >Eliminar</a></td>
        </tr>
        @endforeach

</table>
@endsection
