<?php

include("validaciones.php");

if (!empty($errores)) {
    header("Location: index.php?error=1");
    exit();
}

$area = $_POST["area"];
$habilidades = implode(", ", $_POST["habilidades"]);
$mensaje = $_POST["mensaje"];

/* Aquí podrías guardar en base de datos */

/* Redirigir si todo salió bien */
header("Location: index.php?ok=1");
exit();
