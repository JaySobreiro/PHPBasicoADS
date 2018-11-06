<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<title>Aula 11 - Cadastrar</title>
</head>
<body class="container">

	<?php include 'menu.php'; 


	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		if($msg == 'emptyFields')
		{

			echo '<div class="alert alert-warning" role="alert">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>';
			echo '<p>Preencha todos os campos do formulário!</p></div>';

		}else if ($msg == 'cadInvalid')
		{
			echo '<div class="alert alert-danger" role="alert">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>';
			echo '<p>Nome de usuário ou e-mail já cadastrado! por favor, tente novamente com outros dados.</p></div>';
		}
		else if ($msg == 'cadError')
		{
			echo '<div class="alert alert-danger" role="alert">';
			echo '<h4 class="alert-heading">ATENÇÃO:</h4><hr>';
			echo '<p>Não foi possível realizar o cadastro...</p></div>';
		}

	}

	?>

	<h2 class="text-info">Cadastre-se!</h2>
	<form name="form_cadastro" action="usuario_cad.php" method="post">
		
		<p>
			<label>Nome de Usuário:</label><br>
			<input type="text" name="usuario" placeholder="Nome de usuário" size="30">
		</p>

		<p>
			<label>Senha:</label><br>
			<input type="password" name="senha" placeholder="Senha" size="30">
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" placeholder="E-mail" size="30">
		</p>

		<p>
			<button type="submit" class="btn btn-primary">Cadastrar</button>
		</p>

	</form>

</body>
</html>