<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 07 - Arrays - Home</title>
</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<br>
	<h2>Arrays Multidimensiomais</h2>

	<br>
	<h4>Exibindo arrays individualmente</h4>
	<?php  

	// declaração de arrays simples:
	$pessoa1 = array("Huguinho", 19);
	$pessoa2 = array("Zézinho", 18);
	$pessoa3 = array("Luizinho", 20);

	// mostrando dados da pessoa1:
	echo '<h4>Pessoa 1</h4>';
	echo 'Nome: '  . $pessoa1[0] . '<br>';
	echo 'Idade: ' . $pessoa1[1] . '<br>';

	// mostrando dados da pessoa2:
	echo '<h4>Pessoa 2</h4>';
	echo 'Nome: '  . $pessoa2[0] . '<br>';
	echo 'Idade: ' . $pessoa2[1] . '<br>';

	// mostrando dados da pessoa3:
	echo '<h4>Pessoa 3</h4>';
	echo 'Nome: '  . $pessoa3[0] . '<br>';
	echo 'Idade: ' . $pessoa3[1] . '<br>';


	// criando array multidimensional
	$pessoas = array();
	$pessoas[] = $pessoa1;
	$pessoas[] = $pessoa2;
	$pessoas[] = $pessoa3;

	echo '<br><br>';
	echo '<h4>Exibindo dados do array multidimensional</h4>';

	// pessoa 1 dentro do array pessoas
	echo '<p>';
	echo $pessoas[0][0] . '<br>';
	echo $pessoas[0][1] . '<br>';
	echo '</p>';
	
	// pessoa 2 dentro do array pessoas
	echo '<p>';
	echo $pessoas[1][0] . '<br>';
	echo $pessoas[1][1] . '<br>';
	echo '</p>';

	// pessoa 3 dentro do array pessoas
	echo '<p>';
	echo $pessoas[2][0] . '<br>';
	echo $pessoas[2][1] . '<br>';
	echo '</p>';

	// print_r:
	echo '<br><br>';
	echo '<h4>Exibindo array com print_r</h4>';
	echo '<pre>';
	print_r($pessoas);
	echo '</pre>';

	?>


</body>
</html>