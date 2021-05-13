<!DOCTYPE html>
<html>
<head>
	<title>Ver</title>
	<link rel="stylesheet" type="text/css" href="styles.php">
</head>
<body>
	<?php
	 include("barra.php");
	 include('conexion.php');
	 $filtro = "SELECT * FROM entradas";
	 if (isset($_GET["p"])) {
	 	$page = $_GET["p"];
	 }else{
	 	$page = 1;
	 }
	?>
	
	<div class="base">
		<nav id="filtros">
			<a>test</a>
			<a href="">test</a>
			<a>test</a>
		</nav>

		<?php  
			$consulta = mysqli_query($datos_base, $filtro);
			
			$count = 0;

			while ($listar_prod = mysqli_fetch_assoc($consulta)) {
				$count++;

				if ($count <= 10 + ($page - 1) * 10 AND $count > 0 + ($page - 1) * 10) {
		?>

		<div class="entrada">
			<p class="user"><?php echo $listar_prod['usuario']; ?></p>
			<p class="date"><?php echo $listar_prod['fecha']; ?></p>
			<pre class="content"><?php echo $listar_prod['contenido']; ?></pre>
		</div>

		<?php } }?> 
		<nav id="pages">
			<?php 
			$totalpages = floor(($count / 10) + 0.9);
			if ($page > 1) {
			?>
				<a class="pag" href="ver.php?p=<?php echo 1;?>"> first </a>
				<a class="pag" href="ver.php?p=<?php echo $page - 1;?>"> << </a>
			<?php } ?>
			<form class="formpag" action="goto.php" method="post" name="form1">
				<input class="paginput" min="1" max="<?php echo $totalpages; ?>" type="number" name="pagina" value = "<?php echo $page;?>">
			</form>
			<?php 
			if ($totalpages > $page) {
			?>
				<a class="pag" href="ver.php?p=<?php echo $page + 1;?>"> >> </a>
				<a class="pag" href="ver.php?p=<?php echo $totalpages;?>"> last </a>
			<?php } ?>
		</nav>
	</div>

</body>
</html>