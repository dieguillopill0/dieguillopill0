<?php

require_once "conexion.php";

$sql = "CTEATE DATABASE IF DOES NOT EXIST $db";

if ($conexion->query($sql === true)){
    echo "BASE DE DATOS CREADA / YA EXISTE";
}  else{
    echo " error: " . $conexion->error;
}

?>