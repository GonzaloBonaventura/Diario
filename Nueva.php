<!DOCTYPE html>
<html>
<head>
	<title>Nueva entrada</title>
	<link rel="stylesheet" type="text/css" href="styles.php">
</head>
<body>
	<?php
	 include("barra.php");
	 include("conexion.php");
	?>
	<div id="formulario">
		<form method="POST" action="subir.php">
			<div class="input">Nombre de Usuario: <input type="text" name="usuario" maxlength="30" required></div>
			<div class="input"><textarea name="contenido" placeholder="¿Que ha pasado?¿Que estas pensando?" rows="8" cols="30" required></textarea></div>
			<div class="input"><input type="submit" name="enviar" value="Publicar"></div>
		</form>
	</div>
</body>
</html>
