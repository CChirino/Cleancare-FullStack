<?php
require_once("functions.php");
require_once("conexion.php");
require_once("errors.php");


// call the login() function if register_btn is clicked
if (isset($_POST['login'])) {
	login();
}
// LOGIN USER
function login(){
	global $connection, $usuario, $errors;

	// grap form values
	$usuario = inject_checker($connection,$_POST['usuario']);
	$password = inject_checker($connection,$_POST['password']);

	// Verifica si hay errores en el formulario
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password' LIMIT 1";
		$results = mysqli_query($connection, $query);

		if (mysqli_num_rows($results) == 1) { 
			// Busca el usuario y el tipo de usuario
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['fk_acceso'] == '1') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Te encuentras Logeado";
				header('location: view/admin.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "Te encuentras Logeado";

				header('location: view/usuario.php');
			}
		}else {
			array_push($errors, "Mala combinacion de usuario y contrasena");
		}
	}
}
?>