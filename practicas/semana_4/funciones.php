<?php

function limpiarTexto($texto) {
    return ucfirst(strtolower(trim($texto)));
}

function validarEdad($edad) {
    return filter_var($edad, FILTER_VALIDATE_INT) && $edad > 0;
}

function convertirAJSON($datos) {
    return json_encode($datos, JSON_PRETTY_PRINT);
}

function convertirDeJSON($json) {
    return json_decode($json, true);
}

function calcularAntiguedad($fechaIngreso) {

    $fechaIngreso = strtotime($fechaIngreso);
    $fechaActual = time(); 
    $diferencia = $fechaActual - $fechaIngreso;
    return floor($diferencia / (60 * 60 * 24 * 365)); // Retorna la antigüedad en años
}
?>