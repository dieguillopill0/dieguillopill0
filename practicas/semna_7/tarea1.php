<?php
include 'conexion.php';
ignore_user_abort(true);
set_time_limit(60);

$nombre_tarea = "Tarea 1 (Reporte)";

// 1. Registro de Inicio
mysqli_query($conn, "INSERT INTO log_eventos (tarea, estado) VALUES ('$nombre_tarea', 'Tarea iniciada')");

for ($i = 1; $i <= 3; $i++) {
    sleep(4); // Simula el trabajo [cite: 48]
    
    // 2. Registro de Progreso
    $progreso = "Progreso: etapa $i de 3";
    mysqli_query($conn, "INSERT INTO log_eventos (tarea, estado) VALUES ('$nombre_tarea', '$progreso')");
}

// 3. Registro de Finalización
mysqli_query($conn, "INSERT INTO log_eventos (tarea, estado) VALUES ('$nombre_tarea', 'Tarea finalizada')");
?>