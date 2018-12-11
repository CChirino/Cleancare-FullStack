<?php
require_once("../Controller/signup.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Register Clean Clear</title>
    
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" type="image/png" href="../assetss/img/favicon.png">
    <link rel="stylesheet" href="../assetss/css/register.css">
    
</head>
<body>

<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="../assetss/img/logo2-2.png" alt="">
                <h2>Clean Care</h2>
            </div>
            <div class="menu">
                <a href="../index.php"><li class="module-login">Login</li></a>
                <a href="register.php"><li class="module-register active">Register</li></a>
            </div>
        </div>
        
        <form role="form" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="form">
        
            <div class="welcome-form"><h1>Bienvenido</h1><h2>Clean Care</h2></div>
            
            <div class="user line-input">
                <input type="email" placeholder="Correo" name="email" required>
            </div>
            <div class="line-input">
                <input type="text" placeholder="Nombre" name="nombre" required>
            </div>
            <div class="line-input">
                <input type="text" placeholder="Apellido" name="apellido" required>
            </div>
            <div class="line-input">
                <input type="tel" placeholder="Telefono" name="telefono" required>
            </div>
            <div class="user line-input">
                <input type="text" placeholder="Nombre Usuario" name="usuario" required>
            </div>
            <div class="password line-input">
                <input type="password" placeholder="Contraseña" name="password" required>
            </div>
            <div class="password line-input">
                <input type="password" placeholder="Confirmar contraseña" name="password_2" required>
            </div>
            <button type="submit" name="registro" required>Registrarse</button>
            <div class="espacio-error">
            <?php include('../Controller/errors.php'); ?>
            </div>
    </form>
    </div>

    <script src="../assetss/js/jquery.js"></script>
    <script src="../assetss/js/script.js"></script>
</body>
</html>