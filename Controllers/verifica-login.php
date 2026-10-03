<?php

	session_start();

	if(!@isset($_COOKIE['lembrar'])){

		if (!$_SESSION['login']) {
			header('Location: login');
			exit();
		}

	}

?>