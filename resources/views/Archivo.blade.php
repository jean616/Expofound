<?php
use Illuminate\Support\Facades\Storage;
?>
@extends("layout")
@section("contenido")
    <form method="post" action="/subir-archivos" enctype="multipart/form-data">
            @csrf
        <input type="file" name="archivoss">
        <input type="submit" name="submit" value="subir">
    </form>
        <<a href="{{asset("storage/prueba.txt")}}">link</a>
        <a href="{{asset("try/facil.pdf")}}">link</a>
@endsection
