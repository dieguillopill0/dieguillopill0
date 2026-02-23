<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="js/validaciones.js"></script>
</head>
<body>

<h2>Formulario de Registro</h2>

<form method="POST" action="procesar.php" onsubmit="return validarFormulario();">

    <!-- RADIO -->
    <label>Experiencia:</label><br>
    <input type="radio" name="experiencia" value="Principiante"> Principiante<br>
    <input type="radio" name="experiencia" value="Intermedio"> Intermedio<br>
    <input type="radio" name="experiencia" value="Avanzado"> Avanzado<br><br>

    <!-- CHECKBOX -->
    <label>Habilidades:</label><br>
    <input type="checkbox" name="habilidades[]" value="HTML"> HTML<br>
    <input type="checkbox" name="habilidades[]" value="CSS"> CSS<br>
    <input type="checkbox" name="habilidades[]" value="JavaScript"> JavaScript<br><br>

    <!-- SELECT -->
    <label>Área de interés:</label><br>
    <select name="area" id="area">
        <option value="">Selecciona un área</option>
        <option value="Frontend">Frontend</option>
        <option value="Backend">Backend</option>
        <option value="Base de Datos">Base de Datos</option>
    </select><br><br>

    <button type="submit">Enviar</button>

</form>

</body>
</html>