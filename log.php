<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="styles.php">
</head>
<body>
	<?php include("barra.php");

		$sign = false;
		if (isset($_GET['signup'])) {
			$sign = true;
		}
		
		if ($sign == false) {
			echo $sign;
	 ?>
	<form class="in" action="login.php" method="post">
		<h3>Ingresar</h3>
		<div class="input"><input type="text" name="usuario" maxlength="30" placeholder="Usuario" required></div>
		<div class="input"><input type="Password" name="pass" placeholder="Contraseña" required></div>
		<div class="input"><input type="submit" name="enviar" value="Ingresar"></div>
		<a href="log.php?signup" class="bajo">Crear una cuenta</a>
	</form>
	<?php }else{ ?>

	<form class="in" action="signup.php" method="post">
		<h3>Registrarse</h3>
		<div class="input"><input type="text" name="usuario" placeholder="Usuario" maxlength="30" required></div>
		<div class="input"><input type="email" name="mail" maxlength="40" placeholder="Correo Electronico" required></div>
		<div class="input"><input type="Password" id="letter" name="pass" placeholder="Contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,40}" title="Debe contener al menos un numero, una mayuscula y una minuscula, y entre 8 y 40 caracteres"></div>
		<div class="input"><input type="Password" id="repass" name="repass" placeholder="Repetir Contraseña" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,40}" title="Debe contener al menos un numero, una mayuscula y una minuscula, y entre 8 y 40 caracteres"></div><p class="invalid" id="validation"></p>
		<div class="input" ><input type="submit" name="enviar" value="Registrarse"></div>
		<a href="log.php" class="bajo">¿Ya tienes una cuenta?</a>
	</form>

	<?php } ?>
	<script>
var myInput = document.getElementById("repass");
var first = document.getElementById("letter");


myInput.onfocus = function() {
  document.getElementById("validation").style.display = "block";
}

myInput.onblur = function() {
  document.getElementById("validation").style.display = "none";
}
first.onkeyup = function(){
	validate();
}
myInput.onkeyup = function(){
	validate();
}
function validate() {
var myInputV = myInput.value;
var firstV = first.value;

  if(myInputV == (firstV)) {  //esto no funciona todavia?
    validation.classList.remove("invalid");
    validation.classList.add("valid");
  } else {
    validation.classList.remove("valid");
    validation.classList.add("invalid");
  }
}
</script>
	</script>
</body>
</html>