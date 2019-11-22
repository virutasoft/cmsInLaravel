<!-- contenido -->
<?php

    if (isset($_GET["id"])) {
        # code...
        $item = "id"; //lo de la columna id en la BD
        $valor = $_GET["id"];
        $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
        // echo "<pre>";
        //     print_r($usuario);
        //     "</pre>";
    }


?>


<h1 class="text-center text-success my-5">EDITAR USUARIO</h1>
<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-info text-white" method="POST">
        <div class="form-group">

                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-smile"></i>
                        </span>
                    </div>
                    <input type="text" name="actualizarNombre" value="<?php echo $usuario["nombre"] ?>" class="form-control" placeholder="Su nuevo nombre" id="nombre">
                </div>
        </div>
        <div class="form-group">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
            <input type="email" class="form-control" value="<?php echo $usuario["email"] ?>" placeholder="Su nuevo email" name="actualizarEmail" id="email">
            </div>
        </div>
        <div class="form-group">

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" class="form-control" placeholder="Su nueva clave" name="actualizarPassword" id="pwd">
                <input type="hidden" value="<?php echo $usuario["contrasena"] ?>" name="passwordActual">
                <input type="hidden" value="<?php echo $usuario["id"] ?>" name="idUsuario">
            </div>
            
        </div>
        <?php
           $actualizar = new ControladorFormularios();
           $actualizar->ctrActualizarRegistro(); 
        ?>
        <button type="submit" class="btn btn-warning">Actualizar</button>
    </form>

</div>          
