<?php
	
	session_start();
	session_destroy();
	setcookie('lembrar', 'true', time() - (60*60*24*7), '/');
	header('Location: home');
	exit();

?>