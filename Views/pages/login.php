<?php

	session_start();

	if (!isset($_SESSION['login']) && !@isset($_COOKIE['lembrar'])){

		if (isset($_POST['logar'])) {
			
			$usuario = 'admin';
			$senha = 'admin';

			$usuarioForm = $_POST['usuario'];
			$senhaForm =  $_POST['senha'];

			if ($usuario == $usuarioForm && $senha == $senhaForm) {
				$_SESSION['login'] = true;

				if(isset($_POST['lembrar'])){
					setcookie('lembrar', 'true', time() + (60*60), '/');
				}

				header('Location: admin');
			}
		}

	include('././config.php');
?>

<!DOCTYPE html>
<html>
<head>

	<title>Login - Facilita</title>

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

	<link href="<?php echo INCLUDE_PATH; ?>css/login.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com" rel="preconnect">
	<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>img/favicon-admin.ico" rel="shortcut icon" type="image/x-icon">

</head>
<body>

	<div class="form-container">
		<a href="<?php echo INCLUDE_PATH_STATIC; ?>home" class="logo" title="Facilita"></a>
		<br>
		<form method="post">
			<div class="form-wraper">
				<div class="input-content">
					<label for="usuario"><i class="fas fa-user" style="margin-right: 2px;"></i></label>
					<input type="text" name="usuario" id="usuario" placeholder="Usuário" required>
				</div>
			</div>

			<div class="form-wraper">
				<div class="input-content">
					<label for="senha"><i class="fas fa-key"></i></label>
					<input type="password" name="senha" id="senha" placeholder="Senha" required>
				</div>
			</div>

			<div class="form-wraper">	
				<input type="checkbox" name="lembrar" id="lembrar">
				<label for="lembrar">Mantenha-me conectado.</label>
			</div>

			<div class="form-wraper">
				<input type="submit" name="logar" value="Logar">
			</div>
		</form>
		<br>
		<a href="<?php echo INCLUDE_PATH_STATIC; ?>home" class="voltar"><i class="fas fa-arrow-left"></i> Voltar à página inicial</a>

	</div>

</body>
</html>

<?php

	} else{

		header('Location: admin');

	}

?>