<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Formulario de Trabajo</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="js/validaciones.js"></script>
</head>
<body>

<h2>Aplicación de Trabajo</h2>

<form action="procesar.php" method="POST" onsubmit="return validarFormulario();">

    <!-- RADIO -->
    <p>1. ¿Tienes experiencia?</p>
    <input type="radio" name="experiencia" value="Si"> Sí
    <input type="radio" name="experiencia" value="No"> No

    <!-- CHECKBOX -->
    <p>2. Selecciona tus habilidades:</p>
    <input type="checkbox" name="habilidades[]" value="Trabajo en equipo"> Trabajo en equipo
    <input type="checkbox" name="habilidades[]" value="Responsable"> Responsable
    <input type="checkbox" name="habilidades[]" value="Puntual"> Puntual

    <!-- SELECT -->
    <p>3. Área a la que aplicas:</p>
    <select name="area" id="area">
        <option value="">-- Selecciona una opción --</option>
        <option value="Ventas">Ventas</option>
        <option value="Sistemas">Sistemas</option>
        <option value="Administracion">Administración</option>
    </select>

    <br><br>
    <button type="submit">Enviar</button>

</form>

</body>
</html>
