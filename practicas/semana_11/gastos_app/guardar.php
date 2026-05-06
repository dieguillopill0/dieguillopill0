<?php
if($_POST){
    $desc = $_POST["descripcion"];
    $monto = $_POST["monto"];

    $archivo = fopen("datos.txt", "a");
    fwrite($archivo, $desc . "|" . $monto . "\n");
    fclose($archivo);

    header("Location: index.php");
}
?>