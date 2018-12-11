<?php
require_once("conexion.php");
require_once("functions.php");
require_once("errors.php");


if (isset($_POST['registro'])){
    $email = inject_checker($connection, $_POST['email']);
    $nombre = inject_checker($connection, $_POST['nombre']);
    $apellido = inject_checker($connection, $_POST['apellido']);
    $telefono = inject_checker($connection, $_POST['telefono']);
    $usuario = inject_checker($connection, $_POST['usuario']);
	$password = inject_checker($connection, $_POST['password']);
	$password_2 = inject_checker($connection, $_POST['password_2']);	
    $password_encriptacion = md5($password);
    $password_encriptacion_2 = md5($password_2);

    /////////// Erro Para chequear campos vacios
if(empty($email)){
    $errors = "El campo correo no puede estar vacio";
    }
    elseif(empty($nombre)){
    $errors = "El campo nombre no puede estar vacio";
    }
    elseif(empty($apellido)){
    $errors= "El campo apellido no puede estar vacio";
    }
    elseif(empty($telefono)){
    $errors = "El campo telefono esta vacio";
    }
    elseif(empty($usuario)){
    $errors = "El campo usuario esta vacio";
    }
    elseif(empty($password_encriptacion)){
    $errors = "El campo contrasena no puede estar vacio";
    }
    elseif($password_encriptacion !== $password_encriptacion_2){
    $errors = "Las contrasenas no coinciden";
    }
    elseif(empty($usuario)){
    $errors = "";
    }
    else{
    $query = " SELECT * FROM usuarios WHERE usuario = '{$usuario}' ";
    $run_query = mysqli_query($connection, $query);
                
    if(mysqli_num_rows($run_query) > 0){
    $errors = "Error:Este usuario ya existe";
    }
    else{
    $query = " INSERT INTO usuarios (email,nombre,apellido,telefono,usuario, password,password_2)
    VALUES('$email', '$nombre', '$apellido', '$telefono', '$usuario', '$password_encriptacion','$password_encriptacion_2')";
    $run_query = mysqli_query($connection, $query);
                    
    if($run_query == true){
    $msg_success = "Registro Exitoso";
    }else{
    $errors = "Registro Fallido";
    }
    }
    }
    }
    
?>    