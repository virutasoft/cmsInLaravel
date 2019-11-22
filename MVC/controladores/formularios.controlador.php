<?php           



class ControladorFormularios{
    static public function ctrRegistro(){
        if (isset($_POST["registroNombre"])) {  
    # code...
        $tabla = "registros";
        $datos = array( "nombre"=>$_POST["registroNombre"],
                        "email"=>$_POST["registroEmail"],
                        "clave"=>$_POST["registroPassword"]
                    );
        $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

        return $respuesta;

        }
    }

    static public function ctrSeleccionarRegistros(){
        $tabla = "registros";

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, null, null);

        return $respuesta;
    }

    public function ctrIngreso(){
        
        if (isset($_POST["ingresoEmail"])) {
            $tabla = "registros";
            $item = "email";
            $valor =$_POST["ingresoEmail"];
            # code...
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            if ($respuesta["email"]== $_POST["ingresoEmail"] && $respuesta["contrasena"] == $_POST["ingresoPassword"]) {

                $_SESSION["validarIngreso"] = "ok";
               # code...
               echo '<script>
                    if (window.history.replaceState) {
                        window.history.replaceState(null, null, window.location.href);
                    }

            window.location="index.php?pagina=inicio";
                </script>';

            # code...
            echo '<div class="alert-success p-3 mb-3">El usuario ha sido registrado.</div>';
           } else {
               # code...
               echo '<script>
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }

            
                </script>';

            # code...
            echo '<div class="alert-danger p-3 mb-3">El usuario NO está registrado.</div>';
           }
           
            
        }
    }
}
