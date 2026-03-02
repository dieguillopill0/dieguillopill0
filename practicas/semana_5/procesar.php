<?php

require_once "config/Conexion.php";
require_once "libreria/EmpleadoHelper.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $puesto = $_POST["puesto"];
    $f_ingreso = $_POST["f_ingreso"];

    if (!EmpleadoHelper::validar($nombre, $correo, $puesto, $f_ingreso)) {
        die("Datos inválidos");
    }

    $conexion = Conexion::conectar();

    $sql = "INSERT INTO empleados (nombre, correo, puesto, f_ingreso)
            VALUES ('$nombre', '$correo', '$puesto', '$f_ingreso')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error al guardar";
    }

    $conexion->close();
}
?>