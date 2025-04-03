<?php
    include("../conexion/conexion_bd.php");
    include("../conexion/controlador_pago.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Pago</title>
    <link rel="stylesheet" href="../css/payment.css">
</head>
<body>
    <div class="header">
        <img src="../images/logo.png" alt="Logo" class="logo-img">
    </div>
    <form action="../conexion/controlador_pago.php" method="POST">
        <div class="container">
            <div class="logo">DRAKOS</div>
            <div class="lock-icon">&#128274;</div>
            <h2>Elige cómo quieres pagar</h2>
            <p>Tu forma de pago está encriptada y puedes cambiarla cuando quieras.<br>Transacciones seguras y confiables.<br>Cancela fácilmente online.</p>
            <button class="button" name="pago-trj">Tarjeta de crédito débito</button>
            <button class="button" name="pago-oxxo">OXXO PAY</button>
        </div>
    </form>

    <script src="../js/payment.js"></script>
</body>
</html>
<!--onclick="selectPayment('card')", onclick="selectPayment('oxxo')"  -->