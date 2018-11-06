<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 09 - Convidado Cadastrado</title>
</head>
<body class="container">

<?php 

	include 'menu.php';

	if( isset($_POST['btn_cadastrar']) &&
	    !empty($_POST['nome']) &&
	    !empty($_POST['fone']) &&
	    !empty($_POST['email']) )
	{

		// receber dados do form:
		$nome  = $_POST['nome'];
		$fone  = $_POST['fone'];
		$email = $_POST['email'];

		// INCLUIR ARQUIVO DE CONEXÃO:
		include 'conn.php'; 

		// criar sql:
		$sql = "INSERT INTO tb_convidados (nome, fone, email) 
		VALUES ('$nome', '$fone', '$email')";

		// executar comando sql na conexão ativa e armazenar o resultado
		// numa variável
		$resultado = mysqli_query($conn, $sql);

		// verificar se resultado retornou algo:
		if($resultado)
		{
			echo '<h3 class="text-success">Convidado cadastrado com sucesso!</h3>';
			mysqli_close($conn);
		}
		else // senão
		{
			echo 'Erro ao cadastrar convidado!<br>';
			echo 'SQL: ' . $sql . '<br>';
			echo mysqli_error($conn);
		}

	}// fim do if que verifica se foram enviados dados do form
	else
	{
		echo '<h3>Por favor, preencha o formulário de cadastro:</h3>';
		include 'form_cadastro.php';
	}

	?>

</body>
</html>