@extends("layout")
@section("contenido")
<table class="table-striped">
    <tr>
        <thead>
        <th>Tipo de usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Contraseña</th>
        <th>Telefono</th>
        <th>dni</th>
        <th>Compañia</th>
        </thead>
    </tr>
    <form method="post" action="/ingresara_Usuarios">
        @csrf
        <tr>
            <tbody>
            <th><select class="form-control" name="Tipo_usuario" >
                    <option value="Administrador">Administrador</option>
                    <option value="Abogado">Abogado</option>
                    <option value="Colaborador">colaborador</option>
            </select> </th>
                <span style="color: coral">{{$errors->first('Tipo_usuario')}}</span>
            <th><input class="form-control" type="text" maxlength="8" name="Nombre" @if($errors->first('Nombre')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('Nombre')}}</span>
            <th><input class="form-control" type="text" maxlength="8" name="Apellido"  @if($errors->first('Apellido')) style="border: 2px solid red" @endif ></th>
                <span style="color: coral">{{$errors->first('Apellido')}}</span>
            <th><input class="form-control" type="text" maxlength="8" name="Contraseña"  @if($errors->first('Contraseña')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('Contraseña')}}</span>

            <th><input class="form-control" type="text" maxlength="9"  name="Telefono" @if($errors->first('Telefono')) style="border: 2px solid red" @endif ></th>
                <span style="color: coral">{{$errors->first('Telefono')}}</span>
            <th><input class="form-control" type="text" maxlength="8"  name="dni" @if($errors->first('dni')) style="border: 2px solid red" @endif ></th>
                <span style="color: coral">{{$errors->first('dni')}}</span>

            <th><input class="form-control" type="text" maxlength="8" name="Compañia" @if($errors->first('Compañia')) style="border: 2px solid red" @endif ></th>
                <span style="color: coral">{{$errors->first('Compañia')}}</span>
        </tr>
            </tbody>
        <tr>
            <tfooter>
            <td colspan="5">
                <input class="btn-primary" type="submit" name="submit" value="Guardar"></td>
            </tfooter>
        </tr>
    </form>
</table>
@endsection
