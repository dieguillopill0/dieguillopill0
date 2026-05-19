<?php

if($_POST){

    $desc = trim($_POST["descripcion"]);
    $monto = trim($_POST["monto"]);

    if($desc != "" && $monto != ""){

        $archivo = fopen("datos.txt", "a");

        fwrite($archivo, $desc . "|" . $monto . "\n");

        fclose($archivo);
    }

    header("Location: index.php");
    exit();
}

?>