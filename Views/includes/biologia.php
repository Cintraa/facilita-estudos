<?php

	$sidebarController = 
	array(
		'bioenergetica'  => 'Bioenergética',
		'atp'  => 'ATP',
		'respiracao-celular-aerobica'  => 'Respiração Celular Aeróbica',
		'nucleo-de-eucariontes'  => 'Núcleo de Eucariontes',
		'mitose'  => 'Mitose',
		'meiose'  => 'Meiose',
		'genetica' => 'Genética',
	);

	define('INCLUDE_PATH_IMG', INCLUDE_PATH.'img/biologia/');

	include('Controllers/sidebar-controller.php');

?>