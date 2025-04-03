<?php
    include("../conexion/controlador_perfil.php");
    include("../conexion/conexion_bd.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="../css/ajustes.css">
</head>
<body>
    <form action="../conexion/controlador_perfil.php" method="POST">

        <div class="header"></div>

        <div class="profile1-container">
            <label for="file-input">
                <div class="profile-pic" id="profile-pic"></div>
            </label>
            <input type="file" id="file-input" class="file-input" accept="image/*">
        </div>
        <div class="profile-container">
            <div class="cover">
                <img src="../images/user.webp" alt="Portada" class="cover-img">
                <div class="edit-icon">&#9998;</div>
                <h2 class="username"><?php echo $nombre;?></h2>
            </div>
            <div class="nav">
                <a>Puntos <b><?php echo $puntos; ?></b></a>
                <a href="plan.php">Consigue más puntos</a>
                <a>Mi lista</a>
                <a href="#" id="settings-btn">Ajustes ▼</a>
            </div>

            <div class="container">
                <div class="settings" id="settings-menu">
                <div class="settings-grid">
                        <div>
                            <h3>Perfil</h3>
                            <button type="button" name="btn-cname" >Cambiar nombre de usuario</button>
                            <button type="button">Cambiar foto de perfil</button>
                            <button type="button">Editar información personal</button>
                        </div>
                        <div>
                            <h3>Seguridad y Privacidad</h3>
                            <button type="button" name="btn-cpass" >Cambiar contraseña</button>
                            <button type="button">Ver dispositivos conectados</button>
                            <button type="button">Activar autenticación en dos pasos</button>
                        </div>
                        <div>
                            <h3>Preferencias</h3>
                            <button type="button">Tema (Claro/Oscuro)</button>
                            <button type="button">Tamaño de fuente</button>
                            <button type="button">Idioma</button>
                        </div>
                        <div>
                            <h3>Cuenta</h3>
                            <button type="button">Vincular/desvincular redes sociales</button>
                            <button type="button" name="btn-dcuenta" onclick="location.href='forgot_pw.php'">Eliminar cuenta</button>
                        </div>
                        <div>
                            <h3>Notificaciones</h3>
                            <button type="button">Activar/desactivar notificaciones</button>
                            <button type="button">Configurar alertas de actividad</button>
                        </div>
                        <div>
                            <h3>Soporte</h3>
                            <button type="button">Preguntas frecuentes</button>
                            <button type="button">Contactar soporte</button>
                            <button type="button">Acerca de la aplicación</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="../js/ajustes.js"></script>
</body>
</html>