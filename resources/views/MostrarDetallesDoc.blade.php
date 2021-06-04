@extends("layout")
@section("contenido")
<table border="1">
    <tr>
        <th>id</th>
        <th>id_Documento</th>
        <th>id_Usuario</th>|
    </tr>
    @foreach($resultados as $docs)
        <tr>
            <th>{{$docs["id"]}}</th>
            <th>{{$docs["id_Documento"]}}</th>
            <th>{{$docs["id_Usuario"]}}</th>
        </tr>
    @endforeach
</table>
@endsection
