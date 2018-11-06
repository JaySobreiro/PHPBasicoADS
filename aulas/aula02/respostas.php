<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Aula 02 - Respostas</title>
</head>
<body>

	<a href="index.php">Voltar para home</a><br>
	
	<?php  

		if(empty($_POST['nome']) || empty($_POST['idade']) 
			|| empty($_POST['email']))
		{
			echo "<h2>Nenhum dado recebido do form 1</h2>";
		}
		else // senão
		{

			// recebendo dados do formulário e armazenando em variáveis
			$nome  = $_POST['nome'];
			$idade = $_POST['idade'];
			$email = $_POST['email'];

			echo "<h2>Dados Cadastrados</h2>";
			echo "<p><b>Nome:</b> ". $nome  . "<br>";
			echo "<b>Idade:</b> "  . $idade . "<br>";
			echo "<b>E-mail:</b> " . $email . "</p>";

		}

	?>

</body>
</html>