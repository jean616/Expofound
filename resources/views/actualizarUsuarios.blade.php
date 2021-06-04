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
                <th><input type="text" name="tipo_usuario" value="{{$dato["tipo_usuario"]}}" @if($errors->first('tipo_usuario')) style="border: 2px solid red" @endif></th>
            <span style="color: coral">{{$errors->first('tipo_usuario')}}</span>
                <th><input type="text" name="nombre_usuario" value="{{$dato["nombre_usuario"]}}" @if($errors->first('nombre_usuario')) style="border: 2px solid red" @endif></th>
            <span style="color: coral">{{$errors->first('nombre_usuario')}}</span>
                <th><input type="text" name="Apellido_usuario" value="{{$dato["Apellido_usuario"]}}" @if($errors->first('Apellido_usuario')) style="border: 2px solid red" @endif></th>
            <span style="color: coral">{{$errors->first('Apellido_usuario')}}</span>
                <th><input type="text" name="Contraseña" value="{{$dato["Contraseña"]}}" @if($errors->first('Contraseña')) style="border: 2px solid red" @endif></th>
            <span style="color: coral">{{$errors->first('Contraseña')}}</span>
                <th><input type="text"  name="telefono" maxlength="9" minlength="9" value="{{$dato["telefono"]}}" @if($errors->first('telefono')) style="border: 2px solid red" @endif></th>
            <span style="color: coral">{{$errors->first('telefono')}}</span>
                <th><input type="text"  name="dni" maxlength="8" minlength="8" value="{{$dato["dni"]}}" @if($errors->first('dni')) style="border: 2px solid red" @endif></th>
            <span style="color: coral">{{$errors->first('dni')}}</span>
                <th><input type="text" name="nombre_compañia" value="{{$dato["nombre_compañia"]}}" @if($errors->first('nombre_compañia')) style="border: 2px solid red" @endif></th>
            <span style="color: coral">{{$errors->first('nombre_compañia')}}</span>
        </tr>
        <tr>
            <td colspan="7"><input class="btn-primary" type="submit" name="submit" value="Actualizar" ></td>
        </tr>
    </form>
    </table>
@endsection
