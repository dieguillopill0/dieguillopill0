<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIEGUILLOELLISTILLO</title>
    <link rel="stylesheet" href="assets/style.css">
   
</head>
<body>

<div class="container">

<h1>Registro de usuarios</h1>

    <form action="procesar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>

        <label for="correo">Correo electrónico:</label>
        <input type="email" id="correo" name="correo" required>

        <label for="contraseña">contraseña</label>
        <input type="password" id="contraseña" name="contraseña" required>

        <label for="confirmar_contraseña">Confirmar contraseña:</label>
        <input type="password" id="confirmar_contraseña" name="confirmar_contraseña" required>

            <input type="submit" value="Enviar">
            <input type="reset" value="Limpiar">
    </form>
</div>
    

</body>
</html>