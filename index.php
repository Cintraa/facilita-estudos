<?php

	$url = isset($_GET['url']) ? $_GET['url'] : 'home';

	if (file_exists('Views/pages/'.$url.'.php')) {
		include('Views/pages/'.$url.'.php');
	} else if (file_exists('Controllers/'.$url.'.php')){
		include('Controllers/'.$url.'.php');
	} else{
		include('Views/pages/404.php');
	}

?>