<?php
require_once("../Controller/regsucursales.php")
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assetss/css/sucursales.css">
    <link rel="icon" type="image/png" href="../assetss/img/favicon.png" />
    <title>Clean Care</title>
</head>
<body>
    <header>
        <div class="container-header">
            <div class="logo">
                <img src="../assetss/img/logo2-2.png" alt="logo">
                <h4 class="nombre_empresa">Clean Clare</h4>
            </div>
            <div class="sesion">
            <h5> Administrador </h5>
            <p> <a href="../Controller/logout.php" style="color: red;">Cerrar sesión</a> </p>

            </div>
        </div>
    </header>
    <div class="nav-bar">
        <ul class="nav">
            <li><a href="admin.php">Inicio</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li><a href="sucursales.php">Sucursales</a></li>
            <li><a href="#">Perfil</a></li>
        </ul>
    </div>
    <div class="welcome-form"><h2> Sucursales</h2></div>

    <div class="container-form-suc">
        <h2 class="welcome-form">Registro de Sucursal</h2>
        
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        <label>Nombre:</label><br>
            <input type="text" name="nombre_s" ><br><br>
        <label>Descripción:</label><br>
            <input type="text" name="descripcion_s" ><br><br>
        <label>Telefono:</label><br>
            <input type="text" name="telefono_s" ><br><br>
        <label>Mapa: </label>
        <div class="campo">
            <div id="mapa"></div>
        </div>
        <label>Latitud:</label><br>
            <input type="text" name="latitud" id="latitud"><br><br>
        <label>Longitud</label><br>
            <input type="text" name="longitud" id="longitud"><br><br>
        <div class="text-center">
            <input type="submit" value="Registro" name="registro">
            </div>
            <?php include('../Controller/errors.php'); ?>
        </form>
    </div>
    <div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62774.368314217376!2d-66.91465822122116!3d10.469256191465965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2af7c510627903%3A0xf2cdcf47bfac6780!2sUniversidad+Nueva+Esparta!5e0!3m2!1ses!2sve!4v1544505734135" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
      <footer>
            <p>(c) 2018 Todos los Derechos Reservados. Christopher Chirino.</p>
            
        </footer>
    
</body>
</script>
</html>