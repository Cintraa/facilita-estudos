<?php

	$sidebarController = 
	array(
		'estrutura-do-atomo'  => 'Estrutura do Átomo',
		'distribuicao-eletronica'  => 'Distribuição Eletrônica',
		'tabela-periodica'  => 'Tabela Periódica',
		'propriedades-periodicas'  => 'Propriedades Periódicas',
		'ligacoes-quimicas'  => 'Ligações Químicas',
		'teoria-de-arrhenius'  => 'Teoria de Arrhenius',
	);

	define('INCLUDE_PATH_IMG', INCLUDE_PATH.'img/quimica/');

	include('Controllers/sidebar-controller.php');

?>