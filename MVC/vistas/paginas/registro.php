<!-- contenido -->

<div class="d-flex justify-content-center text-center">
    <form class="p-5 bg-light" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-smile"></i>
                        </span>
                    </div>
                    <input type="text" name="registroNombre" class="form-control" id="nombre">
                </div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-envelope"></i>
                    </span>
                </div>
            <input type="email" class="form-control" name="registroEmail" id="email">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fas fa-lock"></i>
                    </span>
                </div>
                <input type="password" class="form-control" name="registroPassword" id="pwd">
            </div>
            
        </div>
        <?php
        // método público
            // $registro = new ControladorFormularios();
            // $registro->ctrRegistro();
        // método estático
        $registro = ControladorFormularios::ctrRegistro();
        
        if ($registro == "ok") {

            echo '<script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
                </script>';

            # code...
            echo '<div class="alert-success p-3 mb-3">El usuario ha sido registrado.</div>';
        }
        // }else{
        //     echo '<script>
        //     if (window.history.replaceState) {
        //         window.history.replaceState(null, null, window.location.href);
        //     }
        //         </script>';
        //     echo '<div class="alert-danger p-3 mb-3">Hay un error en el envío de los datos.</div>';
        // }


        ?>
        <button type="submit" class="btn btn-primary">Enviar info</button>
    </form>

</div>          
