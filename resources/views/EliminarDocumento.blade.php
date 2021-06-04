@extends("layout")
@section("contenido")
    <form method="post" action="/EliminarDocumento">
        @csrf
        <section>
            <label>#Documento:  {{$dtl["id"]}} </label>
            <input type="hidden" name="id" value="{{$dtl["id"]}}"> <br>

            <input type="submit" name="submit" value="eliminar">

        </section>

    </form>
@endsection
