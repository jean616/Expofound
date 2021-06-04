@extends("layout")
@section("contenido")
<table class="table table-dark table-striped">
    <tr>
        <th>Id</th>
        <th>Fecha subida</th>
        <th>Nombre cliente</th>
        <th class="text-right"> &nbsp </th>
    </tr>
        @foreach($resultados as $docs)
        <tr>
            <th>{{$docs["id"]}}</th>
            <th>{{$docs["fecha_subida"]}}</th>
            <th>{{$docs["nombre_cliente"]}}</th>
            <td class="td-actions text-right" ><button class=" btn btn-primary btn-sm " role="link" onclick="window.location='/ActualizarDocumento/{{$docs["id"]}}'" type="submit"    >actualizar</button>
            <button class=" btn btn-danger btn-sm " role="link" onclick="window.location='/EliminarDocumento/{{$docs["id"]}}'" type="submit"    >eliminar</button></td>
        </tr>
        @endforeach
</table>
@endsection
