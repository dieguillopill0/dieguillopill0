<?php
require_once "config.php";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error){
    die("error: " . $conexion->connect_error);
}

$sql = "INSERT INTO usuarios (nombre, carrera) VALUES ('Diego', 'sistemas')";

if ($conexion->query($sql) === TRUE){
    echo " Registro exitosos";
} else{
    echo " error: " . $conexion->error;
}
?>
