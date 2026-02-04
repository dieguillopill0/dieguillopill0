<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = (int)$_POST['edad'];
    $contraseña = $_POST['contraseña'];
    $confirmar_contraseña = $_POST['confirmar_contraseña'];

    $errores = [];

    if (empty($nombre)) {
        $errores[] = "El nombre es obligatorio.";
    }

    if ($edad <= 0) {
        $errores[] = "La edad debe ser un número positivo.";
    }

    if (empty($_POST['correo'])) {
        $errores[] = "El correo electrónico es obligatorio.";
    } elseif (!filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL)) {
    $errores[] = "El correo electrónico no es válido.";
    }


    if (strlen($contraseña) < 6) {
        $errores[] = "La contraseña debe tener al menos 6 caracteres.";
    }

    if ($contraseña !== $confirmar_contraseña) {
        $errores[] = "Las contraseñas no coinciden.";
    }

    if (empty($errores)) {
        echo "<h2>Registro exitoso</h2>";
        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p>Edad: " . $edad . "</p>";
        echo "<p>Correo Electrónico: " . htmlspecialchars($_POST['correo']) . "</p>";
            echo "</ul>";
            echo '<a href="index.php">Volver al formulario</a>';
    } 
            
    
    else {
        echo "<h2>Rellena bien el mugre formulario bro:</h2>";
        echo "<ul>";
        foreach ($errores as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
        echo '<a href="index.php">Volver al formulario</a>';
    }
} else {
    header("Location: index.php");
    exit();
}


?>