<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 09 - Lista de convidados</title>
</head>
<body class="container">

	<?php 

	// incluir menu: 
	include 'menu.php';

	// incluir arquivo de conexão
	include 'conn.php';

	// criar comando sql
	$sql = "SELECT nome, fone, email FROM tb_convidados";

	// executar comando sql na conexão ativa e armazenar o resultado numa variável
	$resultado = mysqli_query($conn, $sql);

	// se esta variável trouxe algum resultado
	if(mysqli_affected_rows($conn) > 0)
	{

		echo '<h3 class="text-success">Convidados Cadastrados</h3>';

		// criar array para receber registros vindos da tabela
		$registros = array();
			
		// enquanto tiver registros armazenados em 'resultado', pegue os dados e os armazene em uma nova posição do array associativo 'registros'

		echo '<table class="table table-striped">';
		echo '<tr>'; // linha da tabela
		echo '<th>Nome</th>'; // coluna 1
		echo '<th>Fone</th>'; // coluna 2
		echo '<th>E-mail</th>'; // coluna 3
		echo '</tr>'; // fim da linha 1

		while($registros = mysqli_fetch_assoc($resultado))
		{
			echo '<tr>';
			// foreach para percorrer o array associativo
			foreach ($registros as $valor) 
			{
				echo "<td>" . $valor . "</td>";
			}
			echo '</tr>';
		}

		echo '</table>';

	}// fim if 'resultado'
	else if(mysqli_affected_rows($conn) == 0)
	{
		echo '<h3 class="text-warning">Não há convidados cadastrados ainda...</h3>';
	}
	else
	{
		echo '<h3 class="text-danger">Erro no sql:<br>'.$sql.'<br>';
		echo mysqli_error($conn).'</h3>';
	}

	?>

</body>
</html>