<!DOCTYPE html>
<html lang="es">
<head>
    <title>Titulo de la web| Menos de 55 caracteres</title>
    <meta charset="utf-8" />
    <meta name="description" content="Debe contener las palabras clave, tratar de atraer clicks y de longitud entre 150 y 160 caracteres">
    <!--<link rel="stylesheet" href="estilos.css" />-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="shortcut icon" href="/favicon.ico" />
    <style>
        .actual{
            color: coral;
            font-weight: bold;
        }
    </style>
</head>

<body style="background-color: chartreuse">

<nav>
    <a href="/ingresoDocumentos" >Ingresar Documentos</a>
    <a href="/MostrarDocumento " >Mostrar Documentos</a>
</nav>
<header>
    <h1>Control de Documentos</h1>

</header>
<section>
    @yield("contenidoDocumen")
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>
