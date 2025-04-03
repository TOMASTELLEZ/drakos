<?php
$conexion = new mysqli("127.0.0.1", "root", "", "registro", 3306);

// Verificar conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Establecer el charset
if (!$conexion->set_charset("utf8")) {
    die("Error al establecer el conjunto de caracteres: " . $conexion->error);
}
?>
