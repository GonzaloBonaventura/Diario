<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="styles.php">
</head>
<body>
	<?php 
	include("session.php");
	include("barra.php"); 
	if (isset($_GET['login'])) {
		if ($logged = true) {
			echo "<h3>¡Has iniciado sesión con éxito " . $user_s['usuario'] . "!</h3>";
		}else{
			header("location: log.php");
		}
	}
	?>
</body>
</html>