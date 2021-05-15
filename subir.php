<?php 
include 'session.php';
if ($logged) {
	include 'conexion.php';
	$content = $_POST['contenido'];
	$datetime = date("Y-m-d H:i:s");

	mysqli_query($datos_base, "INSERT INTO entradas VALUES (DEFAULT, '$id', '$content', '$datetime')");
	header("Location: Index.php");
}else{

}

?>