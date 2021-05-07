@extends("layoutDoc")
@section("contenidoDoc")
    <form method="post" action="/Eliminar_Usuario">
        @csrf
        <section>
            <label>Usuario:</label>
            <input type="number" name="id" value="{{$ddt["id"]}}"> <br>

            <input type="submit" name="submit" value="eliminar">

        </section>

    </form>
@endsection
