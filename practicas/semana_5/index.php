<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Empleados</title>
</head>
<body>

<h2>Registrar Empleado</h2>

<form action="procesar.php" method="POST">

    Nombre:<br>
    <input type="text" name="nombre" required><br><br>

    Correo:<br>
    <input type="email" name="correo" required><br><br>

    Puesto:<br>
    <input type="text" name="puesto" required><br><br>

    Fecha de ingreso:<br>
    <input type="date" name="f_ingreso" required><br><br>

    <button type="submit">Registrar</button>

</form>

<br>
<a href="listar.php">Ver empleados registrados</a>

</body>
</html>