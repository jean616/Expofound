@extends("layout")
@section("contenido")
    <table border="1" class="table table-dark table-striped" >
        <tr>
            <th>Fecha subida</th>
            <th>Nombre Abogado</th>
            <th>Nombre cliente</th>
        </tr>
        <form method="post" action="/ActualizarDocumento">
            @csrf
            <tr>
                <input class="container-fluid" type="hidden" name="id" value="{{$docss["id"]}}" >
                <th><input class="form-control" type="datetime-local" name="fecha_subida" value="{{$docss["fecha_subida"]}}" required></th>
                <th><input class="form-control container-fluid" type="text" name="nameUser"  value="{{$docss["nameUser"]}}" ></th>
                <span style="color: coral">{{$errors->first('nameUser')}}</span>
                <th><input class="form-control container-fluid " type="text" name="nombre_cliente"  value="{{$docss["nombre_cliente"]}}" ></th>
                <span style="color: coral">{{$errors->first('nombre_cliente')}}</span>

            </tr>
            <tr>
                <td colspan="7"><input class="btn-primary"  type="submit" name="submit" value="Actualizar" ></td>
            </tr>
        </form>
    </table>
@endsection
