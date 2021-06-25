@extends("layout")
@section("contenido")
    <form method="post" action="/deltee">
        @csrf
        <section>
            <label>Usuario {{$ddt["name"]}} </label><br>
            <input type="hidden" name="id" value="{{$ddt["id"]}}"> <br>

            <input type="submit" name="submit" value="eliminar">

        </section>

    </form>
@endsection
