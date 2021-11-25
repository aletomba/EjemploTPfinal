<!doctype html>
<html lang="en">
  <head>
    <title>Productos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      
    <?php
        include_once "navegacion.php";
    ?>


    <!-- Contenedor donde mostraremos el contenido de las diferentes paginas -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    //A partir del metodo obtener paginas del controladore iremos cambiando la pagina
                    $controlador = new ControladorPaginas();
                    $controlador -> obtenerPagina();
                ?>
                
            </div>
        </div>
    </div>

  </body>
</html>