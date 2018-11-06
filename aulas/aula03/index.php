<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Aula 03 - Home</title>
</head>
<body>

	<h2>Preferências Pessoais</h2>
	<form name="prefencias" action="respostas.php" method="post">
		
		<p>
			<label>Informe seu nome:</label><br>
			<input type="text" name="nome" placeholder="Nome" class="campo">
		</p>

		<p>
			<label>E-mail para contato:</label><br>
			<input type="email" name="email" placeholder="E-mail" class="campo">
		</p>

		<p>
			<label>Cor preferida:</label><br>
			<input type="color" name="cor" class="campo">
		</p>

		<p>
			<label>Você prefere estudar em qual turno?</label><br>
			<select name="turno" class="campo">
				<option value="Manhã" selected>Manhã</option>
				<option value="Tarde">Tarde</option>
				<option value="Noite">Noite</option>
			</select>
		</p>

		<p>
			<button type="submit" class="botao enviar">Enviar </button> 
			<button type="reset" class="botao limpar">Limpar</button>
		</p>

	</form>

	<br><br><br>

	<h2>Calculo de idade</h2>

	<form name="calc_idade" action="respostas.php" method="get">
		
		<p>
			<label>Ano de nascimento:</label><br>
			<input type="number" name="ano_nasc" class="campo" min="1900" max="2018">
		</p>

		<p>
			<label>Ano atual:</label><br>
			<input type="number" name="ano_atual" class="campo" min="2018">
		</p>

		<p>
			<button type="submit" class="botao enviar">Enviar</button>
		</p>

	</form>


</body>
</html>