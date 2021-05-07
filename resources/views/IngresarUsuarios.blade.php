@extends("layout")
@section("contenido")
<table>
    <tr>
        <th>Tipo_de_usuario</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Contraseña</th>
        <th>Telefono</th>
        <th>dni</th>
        <th>Compañia</th>
    </tr>
    <form method="post" action="/ingresara_Usuarios">
        @csrf
        <tr>
            <th><input type="text" maxlength="10" name="tipo_usuario" required></th>
            <th><input type="text" maxlength="8" name="Nombre" required></th>
            <th><input type="text" maxlength="8" name="Apellido"  required ></th>
            <th><input type="text" maxlength="8" name="Contraseña" required ></th>
            <th><input type="text" maxlength="9" name="Telefono" required></th>
            <th><input type="text" maxlength="8" name="dni" required></th>
            <th><input type="text" maxlength="8" name="Compañia" required></th>
        </tr>
        <tr>
            <td colspan="5"><input type="submit" name="submit" value="Guardar"></td>
        </tr>
    </form>
</table>
@endsection
