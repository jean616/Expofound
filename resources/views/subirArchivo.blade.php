<?php
use Illuminate\Support\Facades\Storage;
?>
@extends("layout")
@section("contenido")
    <form method="post" action="/subir-archivos" enctype="multipart/form-data">
            @csrf
        <input type="file" name="archivo">
        <input type="submit" name="submit" value="subir">
    </form>
<a href="{{asset("storage/prueba.txt")}}">enlace</a>
    <a href="{{asset("try/facil.pdf")}}">enlace</a>
@endsection
