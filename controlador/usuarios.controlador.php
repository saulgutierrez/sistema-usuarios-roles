<?php
    class ctrUsuarios {
        static function ctrMostrarUsuarios() {
            $tabla = "usuarios";
            $respuesta = mdlUsuarios::mdlMostrarUsuarios($tabla);
            return $respuesta;
        }
    }
?>