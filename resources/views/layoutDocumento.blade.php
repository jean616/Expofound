<!DOCTYPE html>
<html lang="es">
<head>
    <title>Gestion de documentos</title>
    <meta charset="utf-8" />
    <meta name="description" content="Debe contener las palabras clave, tratar de atraer clicks y de longitud entre 150 y 160 caracteres">
    <link rel="stylesheet" href="{{asset("css/app.css")}}"/>
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    -->
    <link rel="shortcut icon" href="/favicon.ico" />
    <style>
        .actual{
            color: coral;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-light" >
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset("img/sobre.png")}}" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Expfound
        </a>
    </div>
</nav>


<header>
    <h1 class="h3 text-center text-primary" >Control de Documentos</h1>

</header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/ingresoDocumentos" >Ingresar Documentos</a> |
                </li>
                <li class="nav-item">
                    <a href="/MostrarDocumento " >Mostrar Documentos</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<section class="container">
    @yield("contenidoDocumen")
</section>
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
-->
<script src="{{asset("js/app.js")}}"></script>
</body>
</html>
