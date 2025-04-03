<?php
    include("controlador.php");
    include("conexion_bd.php");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        session_start();
        $email1 = $_SESSION['email'];
        $old_pass = $_SESSION['clave'];
        if (!empty($_POST['btn-cpass'])){
            header("location:forgot_pw.php");
            $ing1 = 'old pass';
            $ing2 = 'new pass';
            if (!empty($_POST['btn-new-pass'])){
                $clave = $_POST['old-pass'];
                $new_clave = $_POST['new-pass'];
            
                if ($old_pass != $clave){
                    echo"Contraseña incorrecta.";
                } else {
                    $stmt = $conexion->prepare('UPDATE usuarios SET Contraseña = ? where Email = ?;');
                    $stmt->bind_param("ss", $new_clave, $email1);
                    $stmt->execute();
    
                    header("location:login.php");
                }
            }
        }
        if (!empty($_POST['btn-cname'])){
            $ing1 = 'Old Username';
            $ing2 = 'New username';
        }
        if (isset($_POST['btn-dcuenta'])){
            echo"jwddwkd";
        }
    }
?>