<?php
    include("controlador.php");
    include("conexion_bd.php");
    session_start();
    $email1 = $_SESSION['email'];
    $old_pass = $_SESSION['clave']; 
    if (empty($email1)){
        echo "Error datos vacios";
    }  else {
        $stmt = $conexion->prepare("SELECT * FROM usuarios WHERE Email = ?");
        $stmt->bind_param("s", $email1); 
        $stmt->execute();
    
        $resultado = $stmt->get_result();
    
        if ($resultado->num_rows > 0) {
            $usuario = $resultado->fetch_assoc();
            $user_name = $usuario['Username'];
            $nombre = $usuario['Nombre'];
            $puntos = $usuario['Puntos'];
        } else {
            echo 'Error perfil 2';
        }
    }
    if (isset($_POST['pefil-btn'])) {
        header("Location:../index/perfil.php");
    }   
?>