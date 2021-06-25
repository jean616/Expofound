@php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Storage;
@endphp
@extends("layout")
@section("contenido")
<table class="table table-dark table-striped">
    <tr>
        <th>Id</th>
        <th>Fecha subida</th>
        <th>Nombre cliente</th>
        <th>Abogado</th>
        <th>Ver Documento</th>
        <th class="text-right"> &nbsp </th>
    </tr>
        @foreach($resultados as $docs)
        <tr>
            <th>{{$docs["id"]}}</th>
            <th>{{$docs["fecha_subida"]}}</th>
            <th>{{$docs["nombre_cliente"]}}</th>
            <th>{{$docs["nameUser"]}}</th>
            <th><a href="{{asset("storage/app/public/{$docs["Arrchivo"]}")}}">{{$docs["Arrchivo"]}}</a></th>
            <th><a href="@php Storage::get('public'/$docs["Arrchivo"]); @endphp">{{$docs["Arrchivo"]}}</a></th>
            <td class="td-actions text-right" >
                @if(Auth::user()->type == 2  )
                <button class=" btn btn-primary btn-sm " role="link" onclick="window.location='/ActualizarDocumento/{{$docs["id"]}}'" type="submit"    >actualizar</button>
                <button class=" btn btn-danger btn-sm " role="link" onclick="window.location='/EliminarDocumento/{{$docs["id"]}}'" type="submit"    >eliminar</button></th>
                @endif
            @if(Auth::user()->type == 3  )
                <button class=" btn btn-primary btn-sm " role="link" onclick="window.location='/ActualizarDocumento/{{$docs["id"]}}'" type="submit"    >actualizar</button>
                <button class=" btn btn-danger btn-sm " role="link" onclick="window.location='/EliminarDocumento/{{$docs["id"]}}'" type="submit"    >eliminar</button></th>
            @endif

        </tr>
        @endforeach
    <a href="{{asset("storage/prueba.txt")}}">link</a>
</table>
@endsection
