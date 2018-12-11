
<?php
//print_r($_POST);

$pk_producto=(isset($_POST['pk_producto']))?$_POST['pk_producto']:"";
$nombre_p=(isset($_POST['nombre_p']))?$_POST['nombre_p']:"";
$descripcion_p=(isset($_POST['descripcion_p']))?$_POST['descripcion_p']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../Controller/DB/conexion.php");

switch($accion){
    case "btnagregar":

        $sentencia=$pdo->prepare("INSERT INTO productos(nombre_p,descripcion_p)
        VALUES(:nombre_p,:descripcion_p) ");

        $sentencia->bindParam(':nombre_p',$nombre_p);
        $sentencia->bindParam(':descripcion_p',$descripcion_p);
        $sentencia->execute();

        break;

    case "btnmodificar":
        
        $sentencia=$pdo->prepare("UPDATE productos SET nombre_p=:nombre_p,descripcion_p=:descripcion_p 
        WHERE pk_producto=:pk_producto");

        $sentencia->bindParam(':nombre_p',$nombre_p);
        $sentencia->bindParam(':descripcion_p',$descripcion_p);
        $sentencia->bindParam(':pk_producto',$pk_producto);
        $sentencia->execute();

    break;

    case "btneliminar":

        $sentencia=$pdo->prepare("DELETE FROM productos WHERE pk_producto=:pk_producto");
        $sentencia->bindParam(':pk_producto',$pk_producto);
        $sentencia->execute();
        header('Location:productos.php');

    break;

    case "btncancelar":
    header('Location:productos.php');
    break;

}
    $sentencia=$pdo->prepare("SELECT * FROM productos WHERE 1");
    $sentencia->execute();
    $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assetss/css/productos.css">
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


      <!-- formulario container -->
      <div class="form">
        <div class="welcome-form"><h2> Agregar Producto</h2></div>
            <form action="" method="POST">
                <div>
                    <input type="hidden" name="pk_producto" id="pk_producto" placeholder="ID de producto" value="<?php echo $pk_producto;?>" disabled="disabled" required>
                <div>
                    <label>Nombre de producto</label>
                    <input type="text" name="nombre_p" id="nombre_p" placeholder="Nombre de producto" value="<?php echo $nombre_p;?>" required>
                </div>
                <div>
                    <label>Descripcion de producto</label>
                    <input type="text" name="descripcion_p" id="descripcion_p"  placeholder="Descripcion de producto" value="<?php echo $descripcion_p;?>" required>
                </div>
                <div>
                </div>
                <button type="submit" name="accion" class="btnagregar"   value="btnagregar">Agregar</button>
                <button type="submit" name="accion" class="btnmodificar"  value="btnmodificar">Modificar</button>
                <button type="submit" name="accion" class="btneliminar"  value="btneliminar">Eliminar</button>
                <button type="submit" name="accion" class="btncancelar"  value="btncancelar">Cancelar</button>

              </form>

      </div>
      <div class="table">
          <div class="welcome-form"><h2> Lista de  Producto</h2></div>

        <table>
            <tr>
                <th>Nombre de Producto</th>
                <th>Descripcion de Producto</th>
                <th>Acciones</th>

            </tr>
            <?php foreach($listaProductos as $producto){?>

            <tr>
                <td> <?php echo $producto['nombre_p']; ?></td>
                <td> <?php echo $producto['descripcion_p']; ?></td>
                <td> 
                    <form action="" method="POST">
                    <input type="hidden" name="nombre_p" value="<?php echo $producto['nombre_p']; ?>">
                    <input type="hidden" name="descripcion_p" value="<?php echo $producto['descripcion_p']; ?>">
                    <input type="hidden" name="pk_producto" value="<?php echo $producto['pk_producto']; ?>">


                    <input type="submit" value="Seleccionar" name="accion">
                    <button type="submit" name="accion" class="eliminar"  value="btneliminar">Eliminar</button>

                    </form>
                </td>
            </tr>
            <?php }  ?> 
        </table>
      </div>
      <footer>
            <p>(c) 2018 Todos los Derechos Reservados. Christopher Chirino.</p>
            
          </footer>
</body>
</html>