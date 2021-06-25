@extends("layout")
@section("contenido")
<table>
    <tr>
        <th>fecha subida</th><br>
        <th>Documento Nombre</th>
        <th>Nombre Abogado</th>
        <th>Nombre cliente</th>
    </tr>
    <form method="post" action="/ingresar_Documento">
        @csrf
        <tr>
            <th><input type="datetime-local" maxlength="10" name="fecha_subida"  ></th>
            <th><input type="text" maxlength="10" name="Documento_nombre"  @if($errors->first('Documento_nombre')) style="border: 2px solid red" @endif></th>
            <span style="color: coral">{{$errors->first('Documento_nombre')}}</span>
            <th>
                <!--<input type="text" maxlength="10" name="id_usuario" @/*if($errors->first('id_usuario')) style="border: 2px solid red" @*/endif></th>-->
           @php

                    @endphp
                    <input type="hidden" maxlength="10" name="nameUser" @if($errors->first('nameUser')) style="border: 2px solid red"  @endif value="{{ Auth::user()->name }}" placeholder="{{ Auth::user()->name }}" > {{ Auth::user()->name }}</th>
                <span style="color: coral">{{$errors->first('nameUser')}}</span>

            <th><input type="text" maxlength="10" name="nombre_cliente"  @if($errors->first('nombre_cliente')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('nombre_cliente')}}</span>

        </tr>
        <tr>
            <td colspan="5"><input class="btn-primary" type="submit" name="submit" value="Guardar"></td>
        </tr>
    </form>
    <a href="/subir-archivos">Subir Archivo</a>
</table>
</table>
@endsection
