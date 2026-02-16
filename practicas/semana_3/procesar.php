<?php

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$gusta = $_POST['gusta'];
$lenguaje = $_POST['lenguaje'];

echo "<h1>Respuestas enviadas</h1>";
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
echo "¿Le gusta programar?: " . $gusta . "<br>";
echo "Lenguaje favorito: " . $lenguaje;

echo '<br><br><a href="index.php">Volver a la encuesta</a>';

?>
