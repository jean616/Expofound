<table>
    <tr>
        <th>fecha_subida</th>
        <th>id_usuario</th>
        <th>nombre_cliente</th>
    </tr>
    <form method="post" action="/ingresar_Documento">
        @csrf
        <tr>
            <th><input type="datetime-local" maxlength="10" name="fecha_subida"></th>
            <th><input type="number" maxlength="10" name="id_usuario"></th>
            <th><input type="text" maxlength="10" name="nombre_cliente"></th>
        </tr>
        <tr>
            <td colspan="5"><input type="submit" name="submit" value="Guardar"></td>
        </tr>
    </form>
</table>
