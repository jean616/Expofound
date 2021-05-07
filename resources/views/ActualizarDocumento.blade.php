@extends("layoutDocumento")
@section("contenidoDocumen")
    <table border="1">
        <tr>
            <th>fecha_subida</th>
            <th>id_usuario</th>
            <th>nombre_cliente</th>
        </tr>
        <form method="post" action="/ActualizarDocumento">
            @csrf
            <tr>
                <input type="hidden" name="id" value="{{$docss["id"]}}" >
                <th><input type="datetime-local" maxlength="10" name="fecha_subida" value="{{$docss["fecha_subida"]}}" required></th>
                <th><input type="number" name="id_usuario"  value="{{$docss["id_usuario"]}}" required></th>
                <th><input type="text" name="nombre_cliente"  value="{{$docss["nombre_cliente"]}}" required></th>
            </tr>
            <tr>
                <td colspan="7"><input type="submit" name="submit" value="Actualizar" ></td>
            </tr>
        </form>
    </table>
@endsection
