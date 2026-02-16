<?php

$errores = [];

if (empty($_POST["area"])) {
    $errores[] = "Debe seleccionar un área.";
}

if (empty($_POST["habilidades"])) {
    $errores[] = "Debe seleccionar al menos una habilidad.";
}

if (empty($_POST["mensaje"])) {
    $errores[] = "Debe escribir un mensaje.";
}
