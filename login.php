<?php
include("conexion.php");
if (!empty($_POST['usuario'] && !empty($_POST['pass'] )) {
	$consulta = "SELECT id_user, usuario, mail, password FROM log WHERE ";
	$user = $_POST['usuario'];
	$password = $_POST['pass'];
	$usermatch = mysqli_fetch_assoc(mysqli_query($datos_base, $consulta . "usuario = '$user';"));
	$mailmatch = mysqli_fetch_assoc(mysqli_query($datos_base, $consulta . "mail = '$user';"));
	//para hacerlo de esta manera es necesario excluir nombres de usuario que parezcan correos
}else{
	header("location: log.php");
}

?>