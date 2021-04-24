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
            <th><input type="text" maxlength="8" name="Tipo_de_usuario"></th>
            <th><input type="text" maxlength="8" name="Nombre"></th>
            <th><input type="text" maxlength="8" name="Apellido"></th>
            <th><input type="text" maxlength="8" name="Contraseña"></th>
            <th><input type="text" maxlength="8" name="Telefono"></th>
            <th><input type="text" maxlength="8" name="dni"></th>
            <th><input type="text" maxlength="8" name="Compañia"></th>
        </tr>
        <tr>
            <td colspan="5"><input type="submit" name="submit" value="Guardar"></td>
        </tr>
    </form>
</table>

