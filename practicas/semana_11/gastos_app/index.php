<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Gastos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<div class="app">
    <h2> Mis Gastos</h2>

    <form action="guardar.php" method="POST">
        <input type="text" name="descripcion" placeholder="Ej: Comida" required>
        <input type="number" name="monto" placeholder="Cantidad $" required>
        <button type="submit">Agregar</button>
    </form>

    <h3>Lista de gastos</h3>

    <div class="lista">
        <?php
        $total = 0;

        if(file_exists("datos.txt")){
            $lineas = file("datos.txt");

            foreach($lineas as $linea){
                list($desc, $monto) = explode("|", $linea);
                $total += $monto;

                echo "<div class='item'>
                        <span>$desc</span>
                        <span>$$monto</span>
                      </div>";
            }
        }
        ?>
    </div>

    <h3>Total: $<?php echo $total; ?></h3>
</div>

</body>
</html>