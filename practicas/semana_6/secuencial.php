<?php

$inicio = microtime(true);

echo "Tarea 1 iniciada <br>";
sleep(3);
echo "Tarea 1 terminada <br>";

echo "Tarea 2 iniciada <br>";
sleep(3);
echo "Tarea 2 terminada <br>";

$fin = microtime(true);

$tiempo = round($fin - $inicio,2);

echo "<br>Tiempo total: ".$tiempo." segundos";

?>