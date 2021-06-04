@extends("layoutDocumento")
@section("contenidoDocumen")
<table>
    <tr>
        <th>fecha subida</th>
        <th>id usuario</th>
        <th>nombre cliente</th>
    </tr>
    <form method="post" action="/ingresar_Documento">
        @csrf
        <tr>
            <th><input type="datetime-local" maxlength="10" name="fecha_subida"  ></th>
            <th><input type="text" maxlength="10" name="id_usuario" @if($errors->first('id_usuario')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('id_usuario')}}</span>
            <th><input type="text" maxlength="10" name="nombre_cliente"  @if($errors->first('nombre_cliente')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('nombre_cliente')}}</span>

        </tr>
        <tr>
            <td colspan="5"><input class="btn-primary" type="submit" name="submit" value="Guardar"></td>
        </tr>
    </form>
    <a href="/AdjuntarArchivo">Subir Archivo</a>
</table>
</table>
@endsection
