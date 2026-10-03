<?php 

include('././Controllers/verifica-login.php');
include('././config.php');

?>

<!DOCTYPE html>
<html>
<head>

	<title>Admin - Facilita</title>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="author" content="Pedro Cintra">
	<meta name="description" content="Com nossa plataforma online, você consegue ter um estudo mais produtivo, eficaz, completo e DE GRAÇA. Facilite sua vida!">
	<meta name="theme-color" content="#4890cb">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="og:title" content="Facilita - Otimize seus estudos!">
	<meta property="og:site_name" content="Facilita">
	<meta property="og:description" content="Com nossa plataforma online, você consegue ter um estudo mais produtivo, eficaz, completo e DE GRAÇA. Facilite sua vida!">
	<meta property="og:url" content="https://www.facilitaestudos.com.br">
	<meta property="og:image" content="<?php echo INCLUDE_PATH; ?>img/og-img.jpg">
	<meta property="og:image:type" content="image/jpeg">

	<link href="<?php echo INCLUDE_PATH; ?>css/admin.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Lobster+Two&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>img/favicon-admin.ico" rel="shortcut icon" type="image/x-icon">

</head>
<body>

	<header>
		<div class="container">
			<a href="<?php echo INCLUDE_PATH_STATIC; ?>home" class="logo" title="Facilita"></a>
			<a href="<?php echo INCLUDE_PATH_STATIC; ?>logout" class="fas fa-sign-out-alt logout" title="Admin"></a>
		</div>

		<div class="clear"></div>
	</header>
	<section class="section-location">
		<form method="get">
			<label for="location">Localização: </label>
			<input type="text" name="location" id="location" value="<?php echo @$_GET['location'] ?>">
		</form>
	</section>

	<main>
		<form method="POST" class="main-form">
			<select name="tags" id="tags">
				<option value="titulo">Título</option>
				<option value="subtitulo">Subtítulo</option>
				<option value="topico">Tópico</option>
				<option value="lista">Lista</option>
				<option value="imagem">Imagem</option>
				<option value="personalizado">Personalizado</option>
			</select>
			<br>
			<input type="text" name="prev">
			<br>
			<textarea name="conteudo"></textarea>
			<br>
			<input type="submit" name="submit" value="Enviar">
		</form>

		<?php

	if (isset($_POST['submit']) && ($_POST['prev'] != '' || $_POST['conteudo'] != ''))  {
		$arquivo = $_GET['location'];
		$location = "Views/pages/$arquivo.php";
		$prev = $_POST['prev'];
		$conteudo = $_POST['conteudo'];
		$vetor = explode("/", $arquivo);

		switch ($_POST['tags']) {
			case 'titulo':
				$view = '
			<hgroup class="title"><h1><span>'.$prev.'</span></h1></hgroup>
			<br>';
				if (!file_exists($location)) {
					$view = '<?php

	$sidebar = "'.$vetor[0].'";
	$conteudo = "'.$prev/*ucfirst(str_replace("-", " ", $arquivo))*/.'";
	$materia = "'.ucfirst($vetor[0]).'";
	include("Views/includes/header-content.php");

?>
			<hgroup class="title"><h1><span>'.$prev.'</span></h1></hgroup>
			<br>';
					$prevFile = str_replace(" ", "-", $prev);
					$prevFile = strtolower($prevFile);
					$prevFile = str_replace("ç", "c", $prevFile);
					$prevFile = str_replace("ã", "a", $prevFile);
					$prevFile = str_replace("â", "a", $prevFile);
					$prevFile = str_replace("á", "a", $prevFile);
					$prevFile = str_replace("é", "e", $prevFile);
					$prevFile = str_replace("ê", "e", $prevFile);
					$prevFile = str_replace("í", "i", $prevFile);
					$prevFile = str_replace("ó", "o", $prevFile);
					$prevFile = str_replace("?", "", $prevFile);
					$prevFile = str_replace("&", "e", $prevFile);
					$prevFile = str_replace(":", "", $prevFile);
					$prevFile = str_replace("---", "-", $prevFile);
					echo "'$prevFile' => '$prev',";
					// $include = fopen("Views/includes/$vetor[0].php", 'a');
					// $newSidebar = ' $sidebarController["'.$prevFile.'"] = "'.$prev.'"';
					// echo "new file";
					// $include = fopen("Views/includes/$vetor[0].php", 'a');
					// $numeroLinhas = 0;

					// while (!feof($include)) {
					// 	$linha = fgets($include);
					// 	$numeroLinhas = $numeroLinhas + 1;
					// }

					// $conteudoLinha = $numeroLinhas - 7;
					// $i = 0;
					// echo '<br>'.$conteudoLinha.'<br>'.$numeroLinhas;
					// copy("Views/includes/$vetor[0].php", 'Views/includes/copia.php');
					// $copia = fopen('Views/includes/copia.php', 'r+');
					// fwrite(fopen("Views/includes/$vetor[0].php", 'w'), "");

					// while ($i <= $numeroLinhas) {
					// 	$linha = fgets($copia);
					// 	fwrite($include, $linha);
					// 	$i++;
					// }

					// fclose($include);
				}
				fwrite(fopen($location, 'a'), $view);
				fclose(fopen($location, 'a'));
				break;

			case 'subtitulo':
				$view = '
			<subtitle>'.$prev.':</subtitle>
			<br>';
				fwrite(fopen($location, 'a'), $view);
				fclose(fopen($location, 'a'));
				break;
		
			case 'topico':
				$view = '
			<p><topic>'.$prev.':</topic> '.$conteudo.'</p>
			<br>';
				if ($_POST['prev'] == '') {
					$view = '<b>INCOMPLETO</b>';
					break;
				}
				$view = str_replace("<)", "<de>", $view);
				$view = str_replace(")>", "</de>", $view);
				fwrite(fopen($location, 'a'), $view);
				fclose(fopen($location, 'a'));
				break;

			case 'lista':
				$view = '
				<li>'.$conteudo.'</li>';
				if ($_POST['prev'] != '') {
					$view = '
				<li><b>'.$prev.'</b>: '.$conteudo.'</li>';
				}
				$view = str_replace("<)", "<de>", $view);
				$view = str_replace(")>", "</de>", $view);
				fwrite(fopen($location, 'a'), $view);
				fclose(fopen($location, 'a'));
				echo "<ol>$view</ol>";
				echo '<br>';
				break;						
			
			case 'imagem':
				$alt = str_replace(".png", "", $prev);
				$alt = str_replace(".jpg", "", $alt);
				$view = '
			<img src="<?php echo INCLUDE_PATH_IMG; ?>'.$prev.'" alt="'.$alt.'" class="'.$conteudo.'">
			<br>';
				$imgview = '
			<img src="'.INCLUDE_PATH.'img/'.$vetor[0].'/'.$prev.'" alt="'.$alt.'" class="'.$conteudo.'">
			<br>';
				if ($_POST['prev'] == '') {
					$view = '';
					$imgview = '';
				}
				if ($_POST['conteudo'] == '') {
				$view = '
			<img src="<?php echo INCLUDE_PATH_IMG; ?>'.$prev.'" alt="'.$alt.'">
			<br>';
				$imgview = '
			<img src="'.INCLUDE_PATH.'img/'.$vetor[0].'/'.$prev.'" alt="'.$alt.'">
			<br>';
				}
				fwrite(fopen($location, 'a'), $view);
				fclose(fopen($location, 'a'));
				echo $imgview;
				echo "<br>";
				break;

			case 'personalizado':
				$view = '
			'.$conteudo;
				if ($_POST['prev'] != '') {
					$view = '
			<'.$prev.'>'.$conteudo.'</'.$prev.'>
			<br>';
				}
				$view = str_replace("<)", "<de>", $view);
				$view = str_replace(")>", "</de>", $view);
				fwrite(fopen($location, 'a'), $view);
				fclose(fopen($location, 'a'));
				break;

			default:
				echo 'erro';
				break;
		}

		echo $view;
	}

?>

	</main>

</body>
</html>	 