<?php

foreach ($sidebarController as $url => $title) {

		if ($title == $conteudo) {
			echo "<li><a href='#' title='$title' class='selected'>$title</a></li>";
			continue;
		}

		if ($url == '#'){
			echo "<li><a href='#' title='$title' class='pending'>$title</a></li>";
			continue;
		}

		echo "<li><a href='$url' title='$title'>$title</a></li>";

	}

?>