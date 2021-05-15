<?php 
	//include("session.php");	
?>
<nav class="barra">
	<a class="ini" href="index.php">Inicio</a>
	<a href="Nueva.php">Crear</a>
	<a href="Ver.php">Ver</a>
<?php 
	if ($logged) {
		?>
		<a class="perfil" href="perfil.php">
		<?php
		if (strlen($user_s['usuario']) > 15) {
			echo "Perfil";
		}else{
			echo $user_s['usuario'];		
		}
		?>
		</a>
		<?php
	}else{
?>
	<a class="log" href="log.php">Ingresar</a>
<?php } ?>
</nav>