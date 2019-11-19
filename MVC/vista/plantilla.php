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
                <li class="nav-item">
                    <a href="registro.html" class="nav-link">Registro</a>
                </li>
                <li class="nav-item">
                    <a href="ingreso.html" class="nav-link">Ingreso</a>
                </li>
                <li class="nav-item">
                    <a href="index.html" class="nav-link active">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Salir</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- BOTONERA -->
    <!-- contenido -->
    <div class="container-fluid py-5">
        <div class="container">
            <h2>Tabla de usuarios</h2>
            <p>Aquí puede visualizar los usuarios del sistema</p>
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>john@example.com</td>
                    </tr>
                    <tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                    </tr>
                    <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>