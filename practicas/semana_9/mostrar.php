<?php
require_once "config.php";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error){
    die("error: " . $conexion->connect_error);
}

$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0){
    while($fila = $resultado->fetch_assoc()){
        echo "ID; " . $fila["id"] . "<br>";
        echo "Nombre: " . $fila["nombre"] . "<br>";
        echo "Carrera: " . $fila["carrera"] . "<br><hr>";
} 
} else{
    echo "No se encontraron registros";
}
?>