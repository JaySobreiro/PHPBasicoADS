<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 06 - Home</title>
</head>
<body class="container-fluid">

	<?php include 'menu.php'; ?>

	<h1>Página Inicial - Arrays Exemplos Simples</h1>

	<h2>Arrays - Exemplo 01</h2>

	<?php  

		// informando previamente o PHP que a variável abaixo é um array:
		$cidades = array();

		// preenchendo as posições do array manualmente:
		$cidades[0] = "Curitiba";
		$cidades[1] = "São Paulo";
		$cidades[2] = "Londrina";
		$cidades[3] = "Porto Alegre";
		$cidades[4] = "Florianópolis";

		// array acima possui 5 posições válidas (com valores preenchidos)

		// mostrando o array de forma simplificada:

		echo '<pre class="alert alert-secondary">';
		print_r($cidades);
		echo '</pre>';

	?>

	<h2>Arrays - Exemplo 02</h2>

	<?php  

		// declaração automática de array:

		$estados[] = "Paraná";
		$estados[] = "Santa Catarina";
		$estados[] = "Rio Grande do Sul";
		$estados[] = "São Paulo";

		echo '<pre class="alert alert-secondary">';
		print_r($estados);
		echo '</pre>';

	?>

	<h2>Array Associativo - Exemplo 01</h2>

	<?php  

	// lembrete amigo: Não há a necessidade de declarar o tamanho de um array no php

	// array associativo = dar nomes aos índices (posições) do array:

		$pessoa['nome']  = "Jason Sobreiro";
		$pessoa['idade'] = 31;
		$pessoa['email'] = "jason.sobreiro@gmail.com";
		$pessoa['fone']	 = "(41) 91111 3344";

		echo '<pre class="alert alert-secondary">';
		print_r($pessoa); // PRÓPRIO PARA MOSTRAR ARRAYS
		echo '</pre>';	

		echo "<h4>Mostrando array com var_dump</h4>";
		echo '<pre class="alert alert-secondary">';
		var_dump($pessoa); // MOSTRA O TIPO DE DADOS E O VALOR DA VARIÁVEL
		// (qualquer variável, não apenas arrays)
		echo '</pre>';		

	?>

</body>
</html>