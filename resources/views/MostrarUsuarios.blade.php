@php
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
@endphp
@if(Auth::check())
    @php
        header("location:/");
    @endphp
@endif
@extends("layout")
@section("contenido")
<table  class="table table-dark table-striped" >
    <tr>
        <th>Id</th>
        <th> Tipo de usuario </th>
        <th> Nombre </th>
        <th> Apellido </th>
        <th> Contraseña </th>
        <th> Telefono </th>
        <th> dni </th>
        <th> Compañia </th>
        <th class="text-right"> &nbsp </th>
    </tr>
@foreach ($resultados as $usrio)
        <tr>
            <th>{{$usrio["id"]}}</th>
            <th>{{$usrio["tipo_usuario"]}}</th>
            <th>{{$usrio["nombre_usuario"]}}</th>
            <th>{{$usrio["Apellido_usuario"]}}</th>
            <th>{{$usrio["Contraseña"]}}</th>
            <th>{{$usrio["telefono"]}}</th>
            <th>{{$usrio["dni"]}}</th>
            <th>{{$usrio["nombre_compañia"]}}</th>
            <td class="td-actions text-right">
                <button class="btn btn-primary btn-sm " role="link" onclick="window.location='/actualizar-Usuarios/{{$usrio["id"]}}'" type="submit" >actualizar</button>
                <button class="btn btn-danger btn-sm " role="link" onclick="window.location='/EliminarUsuario/{{$usrio["id"]}}'" type="submit"    >eliminar</button></td>

        </tr>
        @endforeach

</table>
@endsection
