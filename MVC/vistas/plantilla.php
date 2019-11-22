<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EJEMPLO MVC</title>

    <!-- PLUGINS CSS ↓↓ -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- PLUGINS CSS ↑↑ -->

    <!-- PLUGINS JS ↓↓ -->

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest fontAwesome version -->
    <script src="https://kit.fontawesome.com/895db1ea0e.js" crossorigin="anonymous"></script>

    <!-- PLUGINS JS ↑↑ -->

</head>

<body>
    <div class="container-fluid">
        <h3 class="text-center py-3">
            LOGO
        </h3>
    </div>
    <!-- BOTONERA -->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if(isset($_GET["pagina"])): ?>
                    <?php if($_GET["pagina"] == "inicio"): ?>
                    <li class="nav-item">
                        <a href="index.php?pagina=inicio" class="nav-link active">Inicio</a>
                    </li>
                    <?php else :?>
                    <li class="nav-item">
                        <a href="index.php?pagina=inicio" class="nav-link ">Inicio</a>
                    </li>
                    
                    <?php endif ?>

                    <?php if($_GET["pagina"] == "registro"): ?>
                    <li class="nav-item">
                        <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                    </li>
                    <?php else :?>
                    <li class="nav-item">
                        <a href="index.php?pagina=registro" class="nav-link ">Registro</a>
                    </li>
                    <?php endif ?>

                    <?php if($_GET["pagina"] == "ingreso"): ?>
                    <li class="nav-item">
                        <a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a>
                    </li>
                    <?php else :?>
                    <li class="nav-item">
                        <a href="index.php?pagina=ingreso" class="nav-link ">Ingreso</a>
                    </li>
                    <?php endif ?>

                    <?php if($_GET["pagina"] == "salir"): ?>
                    <li class="nav-item">
                        <a href="index.php?pagina=salir" class="nav-link active">Salir</a>
                    </li>
                    <?php else :?>
                    <li class="nav-item">
                        <a href="index.php?pagina=salir" class="nav-link ">Salir</a>
                    </li>
                    
                    <?php endif ?>

                    
                    <?php elseif (!isset($_GET["pagina"])) :?>
                        <li class="nav-item">
                            <a href="index.php?pagina=inicio" class="nav-link ">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pagina=registro" class="nav-link active">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pagina=ingreso" class="nav-link ">Ingreso</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?pagina=salir" class="nav-link ">Salir</a>
                        </li>
                    
                <?php endif ?>
                
 
            </ul>
        </div>
    </div>
    <!-- BOTONERA -->
    <!-- contenido -->
    <div class="container-fluid py-5">
        <div class="container">
        <?php
            if (isset($_GET["pagina"])) {
                # code...
                if ($_GET["pagina"]== "inicio" ||
                    $_GET["pagina"] == "registro" ||
                    $_GET["pagina"] == "ingreso" ||
                    $_GET["pagina"] == "salir") {
                 
                    include "paginas/".$_GET["pagina"].".php";
                } else {
                    include "paginas/error404.php";
                }
                
            }else{
                # code...
                include "paginas/registro.php";
            }
            
        ?>
        </div>
    </div>    

    

</body>

</html>