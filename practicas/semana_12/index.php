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
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:#f4f4f4;
            display:flex;
            justify-content:center;
            padding:20px;
        }

        .app{
            width:100%;
            max-width:450px;
            background:white;
            padding:20px;
            border-radius:15px;
            box-shadow:0 0 10px rgba(0,0,0,0.1);
        }

        h1{
            text-align:center;
            margin-bottom:20px;
            color:#333;
        }

        form{
            display:flex;
            flex-direction:column;
            gap:10px;
            margin-bottom:20px;
        }

        input{
            padding:12px;
            border:1px solid #ccc;
            border-radius:10px;
            font-size:16px;
        }

        button{
            padding:12px;
            border:none;
            border-radius:10px;
            background:#2d89ef;
            color:white;
            font-size:16px;
            cursor:pointer;
            transition:0.3s;
        }

        button:hover{
            background:#1b5fbf;
        }

        .lista{
            display:flex;
            flex-direction:column;
            gap:10px;
        }

        .item{
            background:#f9f9f9;
            padding:12px;
            border-radius:10px;
            display:flex;
            justify-content:space-between;
            align-items:center;
            border-left:5px solid #2d89ef;
        }

        .total{
            margin-top:20px;
            text-align:center;
            font-size:22px;
            font-weight:bold;
            color:#222;
        }

        @media(max-width:500px){
            .app{
                padding:15px;
            }

            input, button{
                font-size:14px;
            }
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
            placeholder="Ej: Comida"
            required
        >

        <input 
            type="number" 
            step="0.01"
            name="monto" 
            placeholder="Cantidad $"
            required
        >

        <button type="submit">
            Agregar Gasto
        </button>

    </form>

    <div class="lista">

        <?php

        $total = 0;

        if(file_exists("datos.txt")){

            $lineas = file("datos.txt");

            foreach($lineas as $linea){

                $datos = explode("|", trim($linea));

                if(count($datos) == 2){

                    $desc = htmlspecialchars($datos[0]);
                    $monto = floatval($datos[1]);

                    $total += $monto;

                    echo "
                    <div class='item'>
                        <span>$desc</span>
                        <span>$" . number_format($monto,2) . "</span>
                    </div>
                    ";
                }
            }
        }

        ?>

    </div>

    <div class="total">
        Total: $<?php echo number_format($total,2); ?>
    </div>

</div>

</body>
</html>