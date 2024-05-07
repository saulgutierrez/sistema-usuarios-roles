<?php
require_once "conexion.php";
    class mdlUsuarios {
        static public function mdlMostrarUsuarios($tabla) {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla"); # Conectando a la base de datos
            $stmt->execute();
            return $stmt->fetchAll(); # Ejecutar y recuperar la informacion
            $stmt = null;
        }
    }
?>