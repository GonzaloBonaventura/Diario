<?php
include("conexion.php");
session_start();
	$logged = false;


if (isset($_SESSION['user_id'])) {
	$id = $_SESSION['user_id'];
	$consulta = "SELECT id_user, usuario, mail, password FROM log WHERE id_user = '$id';";
	$user_s = mysqli_fetch_assoc(mysqli_query($datos_base, $consulta));
	$logged = true;
}else{
	session_destroy();
}
?>