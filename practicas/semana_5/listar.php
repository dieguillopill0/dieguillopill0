<?php
require_once "config/Conexion.php";

$conexion = Conexion::conectar();

$sql = "SELECT * FROM empleados";
$resultado = $conexion->query($sql);

$total = $resultado->num_rows;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Empleados</title>
</head>
<body>

<h2>Empleados Registrados</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Correo</th>
    <th>Puesto</th>
    <th>Fecha ingreso</th>
    <th>Fecha registro</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()) { ?>
<tr>
    <td><?php echo $fila["id"]; ?></td>
    <td><?php echo $fila["nombre"]; ?></td>
    <td><?php echo $fila["correo"]; ?></td>
    <td><?php echo $fila["puesto"]; ?></td>
    <td><?php echo $fila["f_ingreso"]; ?></td>
    <td><?php echo $fila["f_reg_aut"]; ?></td>
</tr>
<?php } ?>

</table>

<h3>Total de empleados: <?php echo $total; ?></h3>

<br>
<a href="index.php">Registrar otro empleado</a>

</body>
</html>

<?php $conexion->close(); ?>