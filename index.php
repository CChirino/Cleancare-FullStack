<?php
require_once("Controller/login.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Clean Care</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">  
    <link rel="icon" type="image/png" href="assetss/img/favicon.png">
    <link rel="stylesheet" href="assetss/css/index.css">
    
</head>
<body>
    
<div class="container-form">
        <div class="header">
            <div class="logo-title">
                <img src="assetss/img/logo2-2.png" alt="">
                <h2>Clean Care</h2>
            </div>
            <div class="menu">
                <a href="Controller/login.php"><li class="module-login active">Login</li></a>
                <a href="view/register.php"><li class="module-register">Register</li></a> 
            </div>
        </div>
        
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" class="form">
        
            <div class="welcome-form"><h1>Bienvenido</h1><h2>Clean Care</h2></div>
            
            <div class="user line-input">
                <label class="lnr lnr-user"></label>
                <input type="text" placeholder="Nombre Usuario" name="usuario" required>
            </div>
            <div class="password line-input">
                <label class="lnr lnr-lock"></label>
                <input type="password" placeholder="Contraseña" name="password" required>
            </div>
            
            <button type="submit" name="login" >Entrar<label class="lnr lnr-chevron-right"></label></button>
            <div class="espacio-error">
            <?php include('Controller/errors.php'); ?>
            </div>
        </form>
    </div>
    
    <script src="../assetss/js/jquery.js"></script>
    <script src="../assetss/js/script.js"></script>
</body>
</html>