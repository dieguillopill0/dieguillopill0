<?php require_once "funciones.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acceso denegado");}

$nombre = limpiarTexto($_POST["nombre"]);
$correo = limpiarTexto($_POST["correo"]);
$edad = $_POST["edad"];
$fecha = $_POST["fecha"];
$puesto = limpiarTexto($_POST["puesto"]);

if (!validarEdad($edad)) {
    die("Edad inválida.");
}
if (strtotime($fecha) > time()) {
    die("Fecha de ingreso inválida.");
}
$Empleado = [
    "nombre" => $nombre,
    "correo" => $correo,
    "edad" => $edad,
    "fechaIngreso" => $fecha,
    "puesto" => $puesto
];
$json = convertirAJSON($Empleado);
$EmProcesado = convertirDeJSON($json);
$EmProcesado["antiguedad"] = calcularAntiguedad($EmProcesado["fechaIngreso"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado Procesado</title>
</head>
<body>
    <div class="container">
    <h1>Reporte del Empleado:</h1>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Edad</th>
            <th>Fecha de Ingreso</th>
            <th>Antigüedad</th>
        </tr>
        <tr>
            <td><?= $EmProcesado["nombre"]; ?></td>
            <td><?= $EmProcesado["correo"]; ?></td>
            <td><?= $EmProcesado["edad"]; ?></td>
            <td><?= $EmProcesado["fechaIngreso"]; ?></td>
            <td><?= $EmProcesado["antiguedad"]; ?></td>
        </tr>
    </table>

<h3>JSON del empleado:</h3>
<pre><?= $json; ?></pre>

<h3>Arreglo del empleado:</h3>
<pre><?= print_r($EmProcesado); ?></pre>

<br>
<a href="index.php">Registrar otro empleado</a>
    </div> 
</body>
</html>