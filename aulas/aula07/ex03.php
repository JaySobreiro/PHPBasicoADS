<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 07 - Arrays - Exemplo 03</title>
</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<h2>Exibindo Arrays com Foreach</h2>
	<br>

	<?php  

	$cadastro1 = array('nome'  => 'Jason Sobreiro',
					   'idade' => 31,
					   'fone'  => '(41) 3387-6789',
					   'email' => 'jason.sobreiro@gmail.com');

	// exibindo dados com foreach:
	echo '<br><h4 class="text-info">Dados do Cadastro 1</h4><br>';
	echo '<p>';

	foreach($cadastro1 as $indice => $valor)
	{

		echo strtoupper($indice) . ": " . $valor . '<br>';
	}

	echo '</p>';

	// criar outros arrays de cadastros

	$cadastro2 = array('nome'  => 'Jãozin',
					   'idade' => 25,
					   'fone'  => '(41) 99988-7894',
					   'email' => 'jao.zinho@gmail.com');


	$cadastro3 = array('nome'  => 'Lara',
					   'idade' => 23,
					   'fone'  => '(41) 98898-7789',
					   'email' => 'lara.lara@gmail.com');

	// array multidimensional cadastros:
	$cadastros = array('c1' => $cadastro1, 
					   'c2' => $cadastro2, 
					   'c3' => $cadastro3);

	echo '<br><h4 class="text-info">Exibindo array multidimensional cadastros com foreach</h4><br>';

	foreach ($cadastros as $indice_cadastros => $cadastro_atual) 
	{
		echo '<p>';
		echo 'Cadastro: ' . $indice_cadastros . '<br>';
		// cadastro_atual é um array.
		// Logo, para acessar seus dados, precisaremos de outro foreach:

		foreach ($cadastro_atual as $indice_atual => $valor_atual) 
		{
			echo '<b>' . strtoupper($indice_atual) . ':</b> ' . 
			$valor_atual . '<br>';
		}
		echo '</p>';
	}

	?>

</body>
</html>
