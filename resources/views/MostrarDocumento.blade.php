<table border="1">
    <tr>
        <th>fecha_subida</th>
        <th>nombre_cliente</th>
    </tr>
        @foreach($resultados as $docs)
        <tr>
            <th>{{$docs["fecha_subida"]}}</th>
            <th>{{$docs["nombre_cliente"]}}</th>
        </tr>
        @endforeach
</table>
