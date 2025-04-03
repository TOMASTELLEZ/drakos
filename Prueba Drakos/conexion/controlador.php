<?php
include("conexion_bd.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST["Boton_login"])) {
        if (empty($_POST["log-mail"]) || empty($_POST["log-pass"])) {
            echo "Campos incompletos.";
        } else {
            session_start();
            $email = $_POST["log-mail"];
            $clave = $_POST["log-pass"];
        
            $_SESSION['email'] = $email;
            $_SESSION['clave'] = $clave;
        
            $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE Email = ? AND Contraseña = ?");
            $stmt->bind_param("ss", $email, $clave); 
            $stmt->execute();

            $resultado = $stmt->get_result();
                
            if ($datos = $resultado->fetch_object()) {
                header("Location:../index/movies.php");    
                exit();
            } else {
                echo"Correo o contraseña incorrectos. ";
            }
            $stmt->close();
        }

        $conexion->close();
    } else {
        echo "ERROR LOGIN.";
    }
    if (!empty($_POST["boton_registro"])) {

        if (empty($_POST["reg-user"]) || empty($_POST["reg-mail"]) || empty($_POST["reg-pass"])) {
            echo "Campos incompletos.";
        } else {
            session_start();
            $email = $_POST["reg-mail"];
            $clave = $_POST["reg-pass"];
            $usuario = $_POST["reg-user"];
            $name = $_POST["reg-name"];
        
            $_SESSION['email'] = $email;

            $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE Email = ? or Username = ?");
            $stmt->bind_param("ss", $email, $usuario); 
            $stmt->execute();

            $resultado = $stmt->get_result();

            $usuario1 = $resultado->fetch_assoc();

            if ($resultado->num_rows > 0) {
                echo "Correo o Usuario ya existentes.";
            } else {
                $stmt = $conexion->prepare("INSERT INTO usuarios VALUES (?, ?, ?, ?,50)");
                $stmt->bind_param("ssss", $name, $usuario, $email, $clave);
    
    
                if ($stmt->execute()) {
                    header("Location:../index/movies.php");
                    exit();
                } else {
                    echo "Error al registrar el usuario.";
                }   
            }
            
        }
        $stmt->close();
    } else {
        echo "ERROR Registro.";
    }

}

?>