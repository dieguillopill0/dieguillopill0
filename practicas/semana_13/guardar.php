<?php

if($_POST){

    $desc = $_POST["descripcion"];
    $monto = $_POST["monto"];

    $id = time();

    $archivo = fopen("datos.txt", "a");

    fwrite($archivo, $id . "|" . $desc . "|" . $monto . "\n");

    fclose($archivo);

    header("Location:index.php");
}

?>