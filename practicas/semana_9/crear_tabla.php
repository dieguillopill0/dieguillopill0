<?php

require_once 'conexion.php';

$conexion = new mysqli($host, $user, $pass, $db);

if($conexion->connect_error){
    die("error:" . $conexion->connect_error);
}
$sql = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    carrera VARCHAR(100)
)";

if($conexion->query($sql) === true){
    echo "tabla crada / ya existe";
} else{
    echo " error: " . $conexion->error;
}
?>
