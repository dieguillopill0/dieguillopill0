<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Gastos</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial;
        }

        body{
            background:#f2f2f2;
            padding:20px;
        }

        .app{
            max-width:450px;
            margin:auto;
        }

        h1{
            text-align:center;
            margin-bottom:20px;
        }

        form{
            background:white;
            padding:15px;
            border-radius:10px;
            margin-bottom:20px;
        }

        input{
            width:100%;
            padding:15px;
            margin-bottom:10px;
            border:1px solid #ccc;
            border-radius:10px;
            font-size:16px;
        }

        button{
            width:100%;
            padding:15px;
            border:none;
            background:#007bff;
            color:white;
            border-radius:10px;
            font-size:16px;
        }

        .card{
            background:white;
            padding:15px;
            margin-bottom:15px;
            border-radius:10px;
            box-shadow:0 0 5px rgba(0,0,0,0.1);
        }

        .card h3{
            margin-bottom:10px;
        }

        .detalle{
            display:inline-block;
            margin-top:10px;
            text-decoration:none;
            color:white;
            background:#28a745;
            padding:10px;
            border-radius:8px;
        }

        .total{
            background:white;
            padding:15px;
            border-radius:10px;
            text-align:center;
            font-size:22px;
            font-weight:bold;
        }

    </style>

</head>
<body>

<div class="app">

    <h1> Control de Gastos</h1>

    <form action="guardar.php" method="POST">

        <input 
            type="text" 
            name="descripcion"
            placeholder="Descripción"
            required
        >

        <input 
            type="number"
            step="0.01"
            name="monto"
            placeholder="Monto"
            required
        >

        <button type="submit">
            Agregar gasto
        </button>

    </form>

    <?php

    $total = 0;

    if(file_exists("datos.txt")){

        $lineas = file("datos.txt");

        foreach($lineas as $linea){

            $datos = explode("|", trim($linea));

            if(count($datos) == 3){

                $id = $datos[0];
                $desc = $datos[1];
                $monto = $datos[2];

                $total += $monto;

                echo "
                <div class='card'>

                    <h3>$desc</h3>

                    <p>Monto: $$monto</p>

                    <a class='detalle' href='detalle.php?id=$id'>
                        Ver detalle
                    </a>

                </div>
                ";
            }
        }
    }

    ?>

    <div class="total">
        Total: $<?php echo number_format($total,2); ?>
    </div>

</div>

</body>
</html>