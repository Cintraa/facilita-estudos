<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title>Facilita - Otimize seus estudos!</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="author" content="Pedro Cintra">
	<meta name="description" content="Com nossa plataforma online, você consegue ter um estudo mais produtivo, eficaz, completo e DE GRAÇA. Facilite sua vida!">
	<meta name="keywords" content="facilita,estudos,facilitaestudos.com.br,estudar,resumo">
	<meta name="robots" content="index,nofollow">
	<meta name="theme-color" content="#4890cb">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:title" content="Facilita - Otimize seus estudos!">
	<meta property="og:site_name" content="Facilita">
	<meta property="og:description" content="Com nossa plataforma online, você consegue ter um estudo mais produtivo, eficaz, completo e DE GRAÇA. Facilite sua vida!">
	<meta property="og:url" content="https://www.facilitaestudos.com.br">
	<meta property="og:image" content="<?php echo INCLUDE_PATH; ?>img/og-img.jpg">
	<meta property="og:image:type" content="image/jpeg">

	<link href="<?php echo INCLUDE_PATH; ?>css/style.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;900&family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>img/favicon.ico" rel="shortcut icon" type="image/x-icon">

	<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q316CJ8E46"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-Q316CJ8E46');
	</script><!-- Global site tag (gtag.js) - Google Analytics -->

</head>
<body>

	<header>
		<div class="container">
			<div>
				<a href="<?php echo INCLUDE_PATH_STATIC; ?>home" class="logo" title="Facilita"></a>
				<a href="<?php echo INCLUDE_PATH_STATIC; ?>login" class="fas fa-lock admin" title="Admin"></a>
			</div>

			<div style="height: calc(100% - 72.75px);">
				<div class="chamada">
					<h2>Deixe seus livros<br />
					e cadernos de lado</h2>
					<br>
					<span>Com nossa plataforma online, você consegue ter um estudo mais produtivo, eficaz, completo e <u><b>DE GRAÇA</b></u>. Facilite sua vida!</span>
				</div>

				<div class="img-asset"></div>

				<div class="clear"></div>
			</div>
		</div>
		<div class="border"></div>
	</header>

	<main>
		<div class="container conteudos-container">
			<div class="open-conteudos">
				<h1>Conteúdos 1º ano E. M.</h1>
				<hr class="space">
			</div>
			<br>
			<div class="conteudos">
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>matematica/grandezas-diretamente-propocionais" title="Matemática">MATEMÁTICA</a>
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>historia/grecia-antiga" title="História">HISTÓRIA</a>
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>sociologia/o-que-e-sociologia" title="Sociologia">SOCIOLOGIA</a>
					<a href="fisica/queda-livre" title="Física">FÍSICA</a>
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>literatura/trovadorismo" title="Literatura">LITERATURA</a>
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>biologia/bioenergetica" title="Biologia">BIOLOGIA</a>
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>geografia/introducao" title="Geografia">GEOGRAFIA</a>
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>gramatica/o-que-e-gramatica" title="Gramática">GRAMÁTICA</a>
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>redacao/paragrafo" title="Redação">REDAÇÃO</a>
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>matematica-II/poligonos" title="Matemática-II">MATEMÁTICA II</a>
					<a href="filosofia/aristoteles" title="Filosofia">FILOSOFIA</a>
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>quimica/estrutura-do-atomo" title="Química">QUÍMICA</a>
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="container conteudos-container">
			<div class="open-conteudos">
				<h1>Extra</h1>
				<hr class="space">
			</div>
			<br>
			<div class="conteudos">
					<a href="<?php echo INCLUDE_PATH_STATIC; ?>livros/a-metamorfose" title="Livros">LIVROS</a>
			</div>
			
			<div class="clear"></div>
		</div>
	</main>

</body>
</html>