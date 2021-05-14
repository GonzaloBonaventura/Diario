<?php
include("conexion.php");
session_start();
if (!empty($_POST['usuario']) && !empty($_POST['pass'])) {
	
	$user = $_POST['usuario'];
	$password = $_POST['pass'];
	$consulta = "SELECT id_user, usuario, mail, password FROM log WHERE usuario = '$user' OR mail = '$user';";
	$query = mysqli_query($datos_base, $consulta);

	$usermatch = mysqli_fetch_assoc($query);
	if ($usermatch['usuario'] == "") {
		header("location: log.php?error=user");
	}else{
		if (password_verify($password, $usermatch['password'])) {
			$_SESSION['user_id'] = $usermatch["id_user"];
			header("location: index.php?login");
		}else{
			header("location: log.php?error=pass");
		}
	}
	
}else{
	header("location: log.php");
}

?>