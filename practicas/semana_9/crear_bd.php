<?php
require_once "conexion.php";

$sql = "CREATE DATABASE IF NOT EXISTS $db";

if ($conexion->query($sql) === TRUE) {
    echo "<br>Base de datos creada o ya existente";
} else {
    echo "<br>Error al crear base de datos: " . $conexion->error;
}
?>