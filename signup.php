<?php
include("conexion.php");
	if (!empty($_POST['usuario']) && !empty($_POST['mail']) && !empty($_POST['pass']) && !empty($_POST['repass'])) {
	if (!(str_contains($_POST['usuario'],"@")) &&  count($_POST['usuario']) > 6) {
			
		
		$user = $_POST['usuario'];
		$email = $_POST['mail'];
		$password = password_hash($_POST['pass'], PASSWORD_BCRYPT); 
		$confirm = $_POST['repass'];

		// mysqli_query($datos_base,#) y revisar que no haya mails o usuarios iguales
		if ($_POST['pass'] == $confirm) {
			
			$user_exists = mysqli_fetch_row(mysqli_query($datos_base,"SELECT count(1) FROM log WHERE usuario = '$user'")); 
			if (!$user_exists[0]) {
				//doesnt exist
				

				$mail_exists = mysqli_fetch_row(mysqli_query($datos_base,"SELECT count(1) FROM log WHERE mail = '$email'")); 
				if (!$mail_exists[0]) {
					//mail doesnt exists
					mysqli_query($datos_base, "INSERT INTO log VALUES (DEFAULT, '$user','$email','$password')");
					header("location: log.php?signedup");
					
				}else{
					//mail exists
					header("location: log.php?signup&error=email");
				}


			}else{
				//does exist
				header("location: log.php?signup&error=username");
			}

		}else{
			header("location: log.php?signup&error=password");
		}

	}else{
		header("location: log.php?signup&error=wtf");
	}}
?>