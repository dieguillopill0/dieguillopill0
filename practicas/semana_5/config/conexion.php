<?php
class Conexion {
    public static function conectar() {
        $conexion = new mysqli("localhost", "root", "", "r_empleados");

        if ($conexion->connect_error) {
            die("Error de conexión");
        }

        return $conexion;
    }
}
?>