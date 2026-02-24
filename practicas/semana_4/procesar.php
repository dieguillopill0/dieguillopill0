<?php

require_once 'funciones.php';





$libro = [
    "titulo" => $titulo,
    "autor" => $autor,
    "precio" => (float)$precio,
    "fecha_publicacion" => $fecha_publicacion,
    ];

$json = json_encode()$libro);
$libro_procesado = $json;


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRERY</title>
</head>
<body>    
     <div class="container">
             <h1>LIBRERY</h1>
        <table>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Precio</th>
                <th>Fecha de Publicación</th>
            </tr>

            <tr>
                <td><?= $libro_procesado["titulo"] ?></td>
                <td><?= $libro_procesado["autor"] ?></td>
                <td><?= $libro_procesado["precio"] ?></td>
                <td><?= $libro_procesado["fecha_publicacion"] ?></td>
            </tr>
        </table>

           <h3>JSON GENERADO</h3>
              <pre><?= $json ?></pre>

            <h3>LIBRO PROCESADO</h3>
              <pre><?= print_r($libro_procesado) ?></pre>
              
              <br>
              <a href="index.php">Registra otro libro</a>
    </div>
    
</body>
</html>
