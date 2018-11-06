<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<!-- comentário html -->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Aula 02 - Home</title>
</head>
<body>

	<h1>Formulário 01</h1>

	<form name="form1" action="respostas.php" method="post">
		
		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" required>
		</p>

		<p>
			<label>Idade:</label><br>
			<input type="number" name="idade" min="0" max="120" required>
		</p>

		<p>
			<label>E-mail:</label><br>
			<input type="email" name="email" required>
		</p>

		<p>
			<button type="submit">Enviar</button> 
			<button type="reset">Limpar</button>
		</p>

	</form>

</body>
</html>