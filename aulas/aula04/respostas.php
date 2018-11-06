<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Aula 04 - Respostas</title>
</head>
<body class="container-fluid">

	<br><br>
	<p class="container">
		<a href="index.php" class="btn btn-outline-info">Voltar para home</a>
	</p>

	<?php  

		// verificar SE chegamos nesta página via formulário 'dados_aluno':
		if(isset($_POST['salvar_aluno']))
		{// se foi pressionado o botão 'salvar_aluno' do formulário...
			
			
			// verificar se todo o formulário foi preenchido:
			if(empty($_POST['nome']) || empty($_POST['matricula']))
			{
				echo '<div class="container alert-warning">
				<br>
				<h3 class="container-fluid ">
				Atenção: há dados não preenchidos<br>
				Volte para a página principal e preencha todo o formulário
				</h3>
				<br>
				</div>';
			}
			else
			{
				// receber os dados do form1:
				$nome		= $_POST['nome'];
				$matricula	= $_POST['matricula'];
				$curso		= $_POST['curso'];
				$campus		= $_POST['campus'];

				echo '<div class="container alert-success">
						<br>
						<h3>Aluno cadastrado com sucesso!</h3>
						<br>
						<p>';
						
				echo '<b>Nome:</b> ' 		. $nome 		. '<br>';
				echo '<b>Matrícula:</b> ' 	. $matricula 	. '<br>';
				echo '<b>Curso:</b> ' 		. $curso 		. '<br>';
				echo '<b>Campus:</b> ' 		. $campus 		. '<br>';

				echo '</p><br></div>';
			}

		}
		else // senão
		{
			echo '<div class="container alert-danger">
			<br>
			<h3 class="container-fluid ">
			Nenhum formulário foi preenchido<br>
			Volte para a página principal e preencha um formulário
			</h3>
			<br>
			</div>';
		}
	?>

</body>
</html>