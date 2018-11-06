<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Aula 03 - Respostas</title>
</head>
<body>

	<a href="index.php">Voltar para home</a>

	<?php  

	// se o campo nome estiver em branco ou o campo email estiver em branco
	if( empty($_POST['nome']) || empty($_POST['email']) )
	{
		// exibir mensagem de erro na tela:
		echo '<h2>Nenhum dado recebido do formulário de preferências</h2>';
	}
	else // senão
	{
		// receber os dados do formulário 'preferencias'
		$nome	= $_POST['nome'];
		$email	= $_POST['email'];
		$cor	= $_POST['cor'];
		$turno	= $_POST['turno'];

		echo '<h2>Preferências de '. $nome . ':</h2>';
		echo "<p>";
		echo "<b>E-mail de contato:</b> " . $email . "<br>";
		echo '<b>Cor preferida:</b> ' . $cor .
		': <input type="color" value="' . $cor . '" disabled><br>';
		echo "<b>Turno que prefere estudar:</b> " . $turno;
		echo "</p>";
	}


	// verificar se foi enviado os dados do form 'calc idade'
	if(empty($_GET['ano_nasc']) || empty($_GET['ano_atual']) )
	{
		echo '<h2>Nenhum dado recebido do formulário para cálculo da idade</h2>';
	}
	else // ELSE 1
	{
		$ano_nasc  = $_GET['ano_nasc'];
		$ano_atual = $_GET['ano_atual'];

		$idade = $ano_atual - $ano_nasc;

		if($idade >= 18)
		{
			echo '<h3>Você pode tirar a CNH, pois em ' . $ano_atual . 
			' você terá '.	$idade . ' anos';
		}
		else // ELSE 2
		{
			echo '<h3>Você <b>NÃO</b> pode tirar a CNH, pois em ' . $ano_atual . 
			' você terá '.	$idade . ' anos';
		}

	}// FIM ELSE 1

	?>

</body>
</html>