<?php
    include("conexion_bd.php");
    include("controlador.php");
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST["pago-trj"]) || isset($_POST["pago-oxxo"])){
            session_start();
            $email = $_SESSION['email'];
            $clave = $_SESSION['clave'];
            
            $stmt = $conexion->prepare("SELECT Puntos FROM usuarios where Email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();

            $resultado = $stmt->get_result();
            $usuario = $resultado->fetch_assoc();

            $puntos = $usuario['Puntos'];

            $stmt = $conexion->prepare("UPDATE usuarios SET Puntos = 24000 + ? where Email = ? and Contraseña = ?;");
            $stmt->bind_param("sss", $puntos, $email, $clave);
            $stmt->execute();

            header("location:../index/movies.php");

        } else {
            echo "Error pago";
        }
    }
?>