<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 10 - Gerenciar convidados</title>
</head>
<body class="container">

	<?php 

	// incluir menu: 
	include 'menu.php';

	// verificar se a página recebeu o parâmetro msg
	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		// verificar qual o valor de $msg
		if($msg == 'delError')
		{
			echo '<h3 class="alert-danger">';
			echo '<br>';
			echo 'Não foi possível excluir o registro solicitado';
			echo '<br><br>';
			echo '</h3>';
		
		}
		else if($msg == 'delSuccess')
		{
			echo '<h3 class="alert-success">';
			echo '<br>';
			echo 'Convidado excluído com sucesso!';
			echo '<br><br>';
			echo '</h3>';
		}
		else if($msg == 'edtError')
		{
			echo '<h3 class="alert-danger">';
			echo '<br>';
			echo 'Erro ao editar dados do convidado';
			echo '<br><br>';
			echo '</h3>';
		}
		else if($msg == 'edtSuccess')
		{
			echo '<h3 class="alert-success">';
			echo '<br>';
			echo 'Convidado editado com sucesso!';
			echo '<br><br>';
			echo '</h3>';
		}

	}// fim if 'empty'


	// incluir arquivo de conexão
	include 'conn.php';

	// criar comando sql
	$sql = "SELECT id, nome, fone, email FROM tb_convidados";

	// executar comando sql na conexão ativa e armazenar o resultado numa variável
	$resultado = mysqli_query($conn, $sql);

	// se esta variável trouxe algum resultado
	if(mysqli_affected_rows($conn) > 0)
	{

		echo '<h3 class="text-info">Gerenciar Convidados</h3>';

		// criar array para receber registros vindos da tabela
		$registros = array();
			
		// enquanto tiver registros armazenados em 'resultado', pegue os dados e os armazene em uma nova posição do array associativo 'registros'

		echo '<table class="table table-striped">';
		echo '<tr>'; // linha da tabela
		echo '<th>ID #</th>'; 	// coluna 1
		echo '<th>Nome</th>'; 	// coluna 2
		echo '<th>Fone</th>'; 	// coluna 3
		echo '<th>E-mail</th>'; // coluna 4
		echo '<th>Editar</th>'; // coluna 4
		echo '<th>Deletar</th>'; // coluna 4
		echo '</tr>'; // fim da linha 1

		while($registros = mysqli_fetch_assoc($resultado))
		{
			echo '<tr>';
			// foreach para percorrer o array associativo
			foreach ($registros as $indice => $valor) 
			{
				// se o indice atual for igual a 'id'
				if($indice == 'id')
				{
					// copiamos o valor armazenado para esse indice numa variável nova (id)
					$id = $valor;
				}

				echo "<td>" . $valor . "</td>";
			}

			// link para editar:
			echo '<td><a href="editar.php?id='.$id.'" class="btn btn-warning">Editar</a></td>';

			// link para deletar:
			echo '<td><a href="deletar.php?id='.$id.'" class="btn btn-danger" onClick="return confirm(\'Deseja remover este convidado de sua lista?\')">Deletar</a></td>';

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