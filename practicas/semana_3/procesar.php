<?php

// Verificar que venga por método POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: index.php");
    exit();
}

// Validar que existan los datos
if (!isset($_POST['experiencia']) || 
    !isset($_POST['habilidades']) || 
    !isset($_POST['area'])) {

    echo "Faltan datos del formulario.";
    exit();
}

$experiencia = $_POST['experiencia'];
$habilidades = $_POST['habilidades'];
$area = $_POST['area'];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultados</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Datos enviados</h2>

<p><strong>Experiencia:</strong> <?php echo $experiencia; ?></p>

<p><strong>Habilidades:</strong></p>
<ul>
<?php
foreach ($habilidades as $habilidad) {
    echo "<li>" . $habilidad . "</li>";
}
?>
</ul>

<p><strong>Área seleccionada:</strong> <?php echo $area; ?></p>

<br>
<a href="index.php">Regresar</a>

</body>
</html>
