<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>

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

        .contenedor{
            max-width:450px;
            margin:auto;
            background:white;
            padding:20px;
            border-radius:10px;
        }

        h1{
            margin-bottom:20px;
            text-align:center;
        }

        p{
            margin-bottom:15px;
            font-size:18px;
        }

        a{
            display:inline-block;
            text-decoration:none;
            background:#007bff;
            color:white;
            padding:12px;
            border-radius:10px;
        }

    </style>

</head>
<body>

<div class="contenedor">

<?php

if(isset($_GET["id"])){

    $idBuscar = $_GET["id"];

    if(file_exists("datos.txt")){

        $lineas = file("datos.txt");

        foreach($lineas as $linea){

            $datos = explode("|", trim($linea));

            if(count($datos) == 3){

                $id = $datos[0];
                $desc = $datos[1];
                $monto = $datos[2];

                if($id == $idBuscar){

                    echo "
                    <h1>Detalle del gasto</h1>

                    <p><strong>Descripción:</strong> $desc</p>

                    <p><strong>Monto:</strong> $$monto</p>

                    <a href='index.php'>
                        ← Regresar
                    </a>
                    ";
                }
            }
        }
    }
}

?>

</div>

</body>
</html>