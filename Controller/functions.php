<?php
//////////// Funcion para remover los espacios en blanco //////////
function inject_checker ($connection, $field){
return (htmlentities(trim(mysqli_real_escape_string($connection, $field))));
}
/// Validar si algun campo es nulo /////////
function isNull($email,$nombre,$apellido,$telefono,$usuario,$password,$password_2){
    if (strlen(trim($email)) < 1 || strlen(trim($nombre)) < 1 || strlen(trim($apellido)) < 1 || 
    strlen(trim($telefono)) < 1 || strlen(trim($usuario)) < 1 || strlen(trim($password)) < 1 || 
    strlen(trim($password_2)) < 1 )
    {
        return true;
    } else{
        return false;
    }

}
//// Validadr Correo Electronico ///

function isEmail($email){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    } else{
        return false;
    }
}
//// Validadr Usuario y  Contrasena ///

function isNullLogin($usuario,$password){
    if(strlen(trim($usuario)) < 1 || strlen(trim($password)) < 1){
        return true;
    }
    else{
        return false;
    }
}
?>

