<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Solicitud de Trabajo</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Formulario de Aplicación</h2>

<?php
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Todos los campos son obligatorios.</p>";
}

if (isset($_GET['ok'])) {
    echo "<p style='color:green;'>Solicitud enviada correctamente.</p>";
}
?>

<form action="procesar.php" method="POST">

    <p><strong>1. ¿Área a la que aplicas?</strong></p>
    <input type="radio" name="area" value="Desarrollo" required> Desarrollo<br>
    <input type="radio" name="area" value="Diseño"> Diseño<br>
    <input type="radio" name="area" value="Marketing"> Marketing<br><br>

    <p><strong>2. Habilidades que posees:</strong></p>
    <input type="checkbox" name="habilidades[]" value="Trabajo en equipo"> Trabajo en equipo<br>
    <input type="checkbox" name="habilidades[]" value="Comunicación"> Comunicación<br>
    <input type="checkbox" name="habilidades[]" value="Resolución de problemas"> Resolución de problemas<br><br>

    <p><strong>3. ¿Por qué deberíamos contratarte?</strong></p>
    <textarea name="mensaje" rows="4" cols="40" required></textarea><br><br>

    <button type="submit">Enviar solicitud</button>

</form>

</body>
</html>
