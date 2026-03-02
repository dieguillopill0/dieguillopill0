<?php
class EmpleadoHelper {

    public static function validar($nombre, $correo, $puesto, $f_ingreso) {

        if (empty($nombre) || empty($correo) || empty($puesto) || empty($f_ingreso)) {
            return false;
        }

        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }
}
?>