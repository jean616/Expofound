@extends("layoutDocumento")
@section("contenidoDocumen")
    <form method="post" action="/EliminarDocumento">
        @csrf
        <section>
            <label>#Documento:</label>
            <input type="number" name="id" value="{{$dtl["id"]}}"> <br>

            <input type="submit" name="submit" value="eliminar">

        </section>

    </form>
@endsection
