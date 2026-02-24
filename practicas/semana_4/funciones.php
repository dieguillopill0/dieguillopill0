<?php











function convertirDesdeJSON($json) {
    return json_decode($json, true);
}


function calcularAntiguedad($fecha){
    $fechaLibro= strtotime($fecha);
    $diferencia = time() - $fechaLibro;

    return floor($diferencia / (365 * 24 * 60 * 60));
}
?>