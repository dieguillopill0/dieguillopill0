<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encuesta</title>
    <link rel="stylesheet" href="assets/style.css">


</head>
<body>

<div class="form-container">
    <h1>Encuesta de Programación</h1>
    <form action="procesar.php" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Edad:</label>
        <input type="number" name="edad" required>

        <label>¿Te gusta programar?</label>
        <select name="gusta">
            <option value="si">Sí</option>
            <option value="no">No</option>
        </select>

        <label>Lenguaje favorito:</label>
        <input type="radio" name="lenguaje" value="php"> PHP
        <input type="radio" name="lenguaje" value="python"> Python
        <input type="radio" name="lenguaje" value="java"> Java

        <br><br>
        <button type="submit">Enviar</button>

    </form>
</div>

</body>
</html>
