<?php
include("session.php");
if ($logged) {
	$user_s = "";
	$id = "";
	session_destroy();
	$logged = false;
	header("location: log.php");
}else{
	header("location: index.php");
}
?>