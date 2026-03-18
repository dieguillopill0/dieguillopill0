<?php
include 'conexion.php';

$resultado = mysqli_query($conn, "SELECT * FROM log_eventos ORDER BY fecha DESC LIMIT 10");

echo "<table border='1' style='width:100%; color:white; border-collapse: collapse;'>
        <tr><th>Fecha</th><th>Tarea</th><th>Acción</th></tr>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<tr>
            <td style='padding:5px;'>{$fila['fecha']}</td>
            <td style='padding:5px;'>{$fila['tarea']}</td>
            <td style='padding:5px;'>{$fila['estado']}</td>
          </tr>";
}
echo "</table>";
?>