<?php 
include 'conexion.php';
$user = $_POST['usuario'];
$content = $_POST['contenido'];
$datetime = date("Y-m-d H:i:s");

mysqli_query($datos_base, "INSERT INTO entradas VALUES (DEFAULT, '$user', '$content', '$datetime')");
header("Location: Index.php");
?>