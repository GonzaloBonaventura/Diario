<!DOCTYPE html>
<html>
<head>
	<title>Nueva entrada</title>
	<link rel="stylesheet" type="text/css" href="styles.php">
</head>
<body>
	<?php
	include("session.php");
	 include("barra.php");
	 include("conexion.php");

	?>
	<div id="formulario">
		<form method="POST" action="subir.php">
			<?php
			if ($logged == true) {
	 		?>
			<div class="input">Usuario: <?php echo $user_s['usuario']; ?></div>
			<?php }else{
				echo "<p class='error'> Necesitas ingresar para usar esta funcion </p>";
			} ?>
			<div class="input"><textarea name="contenido" placeholder="¿Que ha pasado?¿Que estas pensando?" rows="8" cols="30" required <?php if ($logged == false) {
				echo "disabled";
			}?>></textarea></div>
			<div class="input"><input type="submit" name="enviar" value="Publicar" <?php if ($logged == false) {
				echo "disabled";
			}?> ></div>
		</form>
	</div>
</body>
</html>
