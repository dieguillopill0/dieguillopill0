<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario de ejemplo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <script src="js/validaciones.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Registro de Empleado</h1>
        <form id="formEmpleado" action="procesar.php" method="POST">
            
            <label>Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label>Correo:</label>
            <input type="email" id="correo" name="correo" required>
            <label>Edad:</label>
            <input type="number" id="edad" name="edad" required>
            <label>Fecha de ingreso:</label>
            <input type="date" id="fecha" name="fecha" required>
            <label>Puesto:</label>
            <input type="text" id="puesto" name="puesto" required>

            <input type="submit" value="Registrar empleado">
            <p id="mensajeError" class="error"></p>
        </form>
    </div>
    
</body>
</html>