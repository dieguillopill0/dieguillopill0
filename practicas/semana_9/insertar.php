<?php
require_once "config.php";
$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Error: " . $conexion->connect_error);
}

$sql = "INSERT INTO alumnos (nombre, carrera) VALUES ('Juan Pérez', 'Sistemas')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro insertado con éxito";
} else {
    echo "Error: " . $conexion->error;
}
?>