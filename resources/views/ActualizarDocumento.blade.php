@extends("layout")
@section("contenido")
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
                <th><input class="form-control" type="datetime-local" name="fecha_subida" value="{{$docss["fecha_subida"]}}" required></th>
                <th><input class="form-control" type="hidden" name="id_usuario"  value="{{$docss["id_usuario"]}}" >{{$docss["id"]}}</th>
                <span style="color: coral">{{$errors->first('id_usuario')}}</span>
                <th><input class="form-control" type="text" name="nombre_cliente"  value="{{$docss["nombre_cliente"]}}" ></th>
                <span style="color: coral">{{$errors->first('nombre_cliente')}}</span>
            </tr>
            <tr>
                <td colspan="7"><input class="btn-primary"  type="submit" name="submit" value="Actualizar" ></td>
            </tr>
        </form>
    </table>
@endsection
