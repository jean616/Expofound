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
            <th> Nombre </th>
            <th> Apellido </th>
             <th> Email </th>
            <th> Tipo de usuario </th>
            <th> dni </th>
            <th> Telefono </th>
            <th> Contraseña </th>
            <th class="text-right"> &nbsp </th>
        </tr>
    @foreach ($result as $urio)
            <tr>
                <th>{{$urio["id"]}}</th>
                <th>{{$urio["name"]}}</th>
                <th>{{$urio["apellido"]}}</th>
                <th>{{$urio["email"]}}</th>
                <th>{{$urio["type"]}}</th>
                <th>{{$urio["dni"]}}</th>
                <th>{{$urio["telefono"]}}</th>
                <th>{{$urio["password"]}}</th>
                <td class="td-actions text-right">
                    <th><button class="btn btn-primary btn-sm " role="link" onclick="window.location='/Updatee_User/{{$urio["id"]}}'" type="submit" >actualizar</button></th>
                    <th><button class="btn btn-danger btn-sm " role="link" onclick="window.location='/DeleteUsers/{{$urio["id"]}}'" type="submit"    >eliminar</button></th>



            </tr>
        @endforeach

    </table>
@endsection
