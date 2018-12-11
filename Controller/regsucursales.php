<?php
require_once("conexion.php");
require_once("functions.php");
require_once("errors.php");


if (isset($_POST['registro'])){
    $nombre_s = inject_checker($connection, $_POST['nombre_s']);
    $descripcion_s = inject_checker($connection, $_POST['descripcion_s']);
    $telefono_s = inject_checker($connection, $_POST['telefono_s']);
    $latitud = inject_checker($connection, $_POST['latitud']);
	$longitud = inject_checker($connection, $_POST['longitud']);

    /////////// Erro Para chequear campos vacios
if(empty($nombre_s)){
    $errors = "El campo nombre no puede estar vacio";
    }
    elseif(empty($descripcion_s)){
    $errors = "El campo descripcion no puede estar vacio";
    }
    elseif(empty($telefono_s)){
    $errors= "El campo telefono no puede estar vacio";
    }
    elseif(empty($latitud)){
    $errors = "El campo latitud esta vacio";
    }
    elseif(empty($longitud)){
    $errors = "El campo longitud esta vacio";
    }
    elseif(empty($nombre_s)){
    $errors = "";
    }
    else{
    $query = " SELECT * FROM sucursales WHERE nombre_s = '{$nombre_s}' ";
    $run_query = mysqli_query($connection, $query);
                
    if(mysqli_num_rows($run_query) > 0){
    $errors = "Error:Esta sucursal ya existe";
    }
    else{
    $query = " INSERT INTO sucursales (nombre_s,descripcion_s,telefono_s,latitud,longitud)
    VALUES('$nombre_s', '$descripcion_s', '$telefono_s', '$latitud', '$longitud')";
    $run_query = mysqli_query($connection, $query);
                    
    if($run_query == true){
    $msg_success = "Registro Exitoso";
    }else{
    $errors = "Registro Fallido";
    }
    }
    }
    }
    