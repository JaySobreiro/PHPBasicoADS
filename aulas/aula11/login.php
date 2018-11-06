<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 11 - Login</title>
</head>
<body class="container">

	<?php 

	include 'menu.php';


	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		if($msg == 'emptyFields')
		{

			echo '<div class="alert alert-warning" role="alert">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>';
			echo '<p>Preencha todos os campos do formulário!</p></div>';

		}
		else if ($msg == 'loginError')
		{

			echo '<div class="alert alert-danger" role="alert">';
			echo '<h4 class="alert-heading">OOOPS!</h4><hr>';
			echo '<p>Usuário, e-mail ou senha inválidos!</p></div>';
		}
		else if ($msg == 'cadSuccess')
		{
			echo '<div class="alert alert-success" role="alert">';
			echo '<h4 class="alert-heading">Cadastrado com Sucesso!</h4><hr>';
			echo '<p>Utilize o formulário abaixo para entrar no sistema</p></div>';
		}

	}


	include 'form_login.php'; 

	?>

</body>
</html>