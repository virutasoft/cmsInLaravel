<?php


require "conexion.php";

class ModeloFormularios{
    static public function mdlRegistro($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, contrasena) VALUES(:nombre, :email, :contrasena)");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":contrasena", $datos["clave"], PDO::PARAM_STR);
        
        if ($stmt->execute()) {
            # code...
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt->close();
        $stmt = null;

    }

    static public function mdlSeleccionarRegistros($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
        $stmt->execute();

        return $stmt->fetchAll();

        $stmt->close();
        $stmt = null;
    }
}