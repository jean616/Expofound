@extends("layout")
@section("contenido")
    <table class="table-striped">
        <tr>
            <thead>
            <th>Tipo de usuario</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Contraseña</th>
            <th>email</th>
            <th>dni</th>
            <th>Telefono</th>

            </thead>
        </tr>
        <form method="post" action="/pass_Users">
            @csrf
            <tr>
                <tbody>
                <th><select class="form-control" name="type" >
                        <option value="3">Administrador</option>
                        <option value="2">Abogado</option>
                        <option value="1">colaborador</option>
                    </select> </th>
                <span style="color: coral">{{$errors->first('type')}}</span>
                <th><input class="form-control" type="text" maxlength="150" name="name" @if($errors->first('name')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('name')}}</span>
                <th><input class="form-control" type="text" maxlength="150" name="apellido"  @if($errors->first('apellido')) style="border: 2px solid red" @endif ></th>
                <span style="color: coral">{{$errors->first('apellido')}}</span>

                <th><input class="form-control" type="text" maxlength="150" name="password"  @if($errors->first('password')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('password')}}</span>

                <th><input class="form-control" type="text" maxlength="150" name="email" @if($errors->first('email')) style="border: 2px solid red" @endif ></th>
                <span style="color: coral">{{$errors->first('email')}}</span>
                <th><input class="form-control" type="text" maxlength="8"  name="dni" @if($errors->first('dni')) style="border: 2px solid red" @endif ></th>
                <span style="color: coral">{{$errors->first('dni')}}</span>
                <th><input class="form-control" type="text" maxlength="9"  name="telefono" @if($errors->first('telefono')) style="border: 2px solid red" @endif ></th>
                <span style="color: coral">{{$errors->first('telefono')}}</span>



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
