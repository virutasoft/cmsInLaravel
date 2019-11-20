<?php

class Conexion{
    static public function conectar(){
        # PDO("nombre_servidor, nombreDB","usuario","contraseña)
        $link = new PDO("mysql:host=localhost;dbname=curso-php","root","");

        $link->exec("set names utf8");
        return $link;

    }
}