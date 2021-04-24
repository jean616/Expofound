<table border="1">
    <tr>
        <th>fecha_subida</th>
        <th>id_usuario</th>
        <th>nombre_cliente</th>
    </tr>
    @foreach($resultados as $docs)
        <tr>
            <th>{{$docs["id_Documento"]}}</th>
            <th>{{$docs["id_documento"]}}</th>
            <th>{{$docs["nombre_cliente"]}}</th>
        </tr>
    @endforeach
</table>
