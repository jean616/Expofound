@extends("layout")
@section("contenido")
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
    <form method="post" action="/actualizar-Usuarios">
        @csrf
        <tr>
            <input type="hidden" name="id" value="{{$dato["id"]}}">
                <th><input type="text" name="tipo_usuario" value="{{$dato["tipo_usuario"]}}" required></th>
                <th><input type="text" name="nombre_usuario" value="{{$dato["nombre_usuario"]}}" required></th>
                <th><input type="text" name="Apellido_usuario" value="{{$dato["Apellido_usuario"]}}" required></th>
                <th><input type="text" name="Contraseña" value="{{$dato["Contraseña"]}}" required></th>
                <th><input type="number"  name="telefono" value="{{$dato["telefono"]}}" required></th>
                <th><input type="number"  name="dni" value="{{$dato["dni"]}}" required></th>
                <th><input type="text" name="nombre_compañia" value="{{$dato["nombre_compañia"]}}" required></th>
        </tr>
        <tr>
            <td colspan="7"><input type="submit" name="submit" value="Actualizar" ></td>
        </tr>
    </form>
    </table>
@endsection
