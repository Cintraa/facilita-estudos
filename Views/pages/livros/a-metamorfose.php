<?php

	$sidebar = 'livros';
	$conteudo = 'A Metamorfose';
	$materia = 'Livros';
	$livro = 'a-metamorfose';
	include('Views/includes/header-content.php');

?>

			<img src="<?php echo INCLUDE_PATH_IMG; ?><?php echo $livro; ?>.jpg" alt="<?php echo $livro; ?>" class="livro">
			<br>
			<center>
				<a href="<?php echo INCLUDE_PATH; ?>pages/livros/<?php echo $livro; ?>-facilita.pdf" target="_blank"><i class="fas fa-book-open icon-livros"></i></a>
				<a href="<?php echo INCLUDE_PATH; ?>pages/livros/<?php echo $livro; ?>-facilita.pdf" download><i class="fas fa-download icon-livros"></i></a>
			</center>
		</article>
	</main>
<body>
<html>