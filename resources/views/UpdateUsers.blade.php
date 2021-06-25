@extends("layout")
@section("contenido")
    <table border="1" class="table table-dark table-striped">
        <tr>
            <th> type </th>
            <th> Nombre </th>
            <th> Apellido </th>
            <th> Email </th>
            <th> dni </th>
            <th> Telefono </th>
        </tr>
        <form  method="post" action="/Updatee_User">
            @csrf
            <tr>
                <input type="hidden" name="id" value="{{$dato["id"]}}">
                <th>

                    <select  id="type" name="type" >
                        <option  value="3">Administrador</option>
                        <option  value="2">Abogado</option>
                        <option  value="1">Colaborador</option>
                    </select>
                </th>
                <th>
                <input class="form-control" type="text" name="name" value="{{$dato["name"]}}" @if($errors->first('name')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('name')}}</span>
                <th><input class="form-control" type="text" name="apellido" value="{{$dato["apellido"]}}" @if($errors->first('apellido')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('apellido')}}</span>
                <th><input class="form-control" type="text" name="email" value="{{$dato["email"]}}" @if($errors->first('email')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('email')}}</span>
                <th><input class="form-control" type="text"  name="telefono" maxlength="9" minlength="9" value="{{$dato["dni"]}}" @if($errors->first('dni')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('dni')}}</span>
                <th><input class="form-control" type="text"  name="dni" maxlength="8" minlength="8" value="{{$dato["telefono"]}}" @if($errors->first('telefono')) style="border: 2px solid red" @endif></th>
                <span style="color: coral">{{$errors->first('telefono')}}</span>
            </tr>
            <tr>
                <td colspan="7"><input class="btn-primary" type="submit" name="submit" value="Actualizar" ></td>
            </tr>
        </form>
    </table>
@endsection
