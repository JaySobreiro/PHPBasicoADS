<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<title>Aula 10 - Editar Convidado</title>
</head>
<body class="container">

	<?php  
	include 'menu.php';

	// se não receber parâmetro id
	if(empty($_GET['id']))
	{
		// msg de alerta
		echo '<h3 class="alert-warning">';
		echo '<br>';
		echo 'Não foi possível carregar o formulário de edição';
		echo '<br><br>';
		echo '</h3>';
	}
	else
	{
		$id = $_GET['id'];

		$sql = 'SELECT id, nome, fone, email FROM tb_convidados 
		WHERE id = ' . $id;

		include 'conn.php';

		$resultado = mysqli_query($conn, $sql);

		if(mysqli_affected_rows($conn) > 0)
		{
			$convidado = mysqli_fetch_assoc($resultado);

		?>

		<h2 class="text-info">Editar Convidado</h2>
		<form name="form_editar" action="editado.php" method="post">
			
			<p>
				<label>Nome:</label><br>
				<input type="text" name="nome" 
				value="<?php echo $convidado['nome']; ?>">
			</p>

			<p>
				<label>Fone:</label><br>
				<input type="text" name="fone"
				value="<?php echo $convidado['fone']; ?>">
			</p>

			<p>
				<label>E-mail</label><br>
				<input type="email" name="email"
				value="<?php echo $convidado['email'] ?>">
			</p>

			<input type="hidden" name="id" 
			value="<?php echo $convidado['id']; ?>">

			<p>
				<button name="btn_editar" type="submit" class="btn btn-warning">Editar</button>
			</p>

		</form>

		<?php

		}// fim if (mysqli_affected_rows($conn))
		else
		{
			// msg de alerta
			echo '<h3 class="alert-danger">';
			echo '<br>';
			echo 'Não foi localizado convidado com o id informado';
			echo '<br><br>';
			echo '</h3>';
			
		}
	}

	?>

</body>
</html>