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
}
