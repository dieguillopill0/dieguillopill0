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
    } else {
        echo "<h2>Errores en el formulario:</h2>";
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