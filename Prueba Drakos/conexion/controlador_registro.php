<?php
include("conexion_bd.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST["boton_registro"])) {

        if (empty($_POST["reg-user"]) || empty($_POST["reg-mail"]) || empty($_POST["reg-pass"])) {
            echo "Campos incompletos.";
        } else {
            $email = $_POST["reg-mail"];
            $clave = $_POST["reg-pass"];
            $usuario = $_POST["reg-user"];
            $name = $_POST["reg-name"];

            

            $stmt = $conexion->prepare("INSERT INTO usuarios VALUES (?, ?, ?, ?,0)");
            $stmt->bind_param("ssss", $name, $usuario, $email, $clave);


            if ($stmt->execute()) {
                echo "Registro exitoso.";
                header("Location:../index/movies.php"); // Redirigir después del registro
                exit();
            } else {
                echo "Error al registrar el usuario.";
            }
        }
        $stmt->close();
    } else {
        echo "ERROR.";
    }
}
$conexion->close();
?>