<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 07 - Arrays - Exemplo 02</title>
</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<br>
	<h2>Arrays Multidimensionais - Exemplo 02</h2>

	<?php 

	$carro1  = array('Marca'  => 'Ford',
	 				 'Modelo' => 'Fiesta',
	 				 'Cor' 	  => 'Vermelho',
	 				 'Ano'    => 2012);

	/* o código acima é semelhante a:
	$carro1 = array();
	$carro1['Marca']  = 'Ford';
	$carro1['Modelo'] = 'Fiesta';
	$carro1['Cor']    = 'Vermelho';
	$carro1['Ano']    = 2012
	*/

	// carro 2:
	$carro2  = array('Marca'  => 'Chevrolet',
	 				 'Modelo' => 'Celta',
	 				 'Cor' 	  => 'Preto',
	 				 'Ano'    => 2015);

	// carro 3:
	$carro3  = array('Marca'  => 'Fiat',
	 				 'Modelo' => 'Uno',
	 				 'Cor' 	  => 'Branco',
	 				 'Ano'    => 2013);

	// carro 4:
	$carro4  = array('Marca'  => 'Volks',
	 				 'Modelo' => 'Fusca',
	 				 'Cor' 	  => 'Azul',
	 				 'Ano'    => 1964);

	// array multidimensional 'garagem':
	// cada posição de 'garagem' receberá um carro:
	$garagem = array('Vaga1' => $carro1,
					 'Vaga2' => $carro2,
					 'Vaga3' => $carro3,
					 'Vaga4' => $carro4);

	// exibindo array multidimensional campo a campo
	// (vulgo, trabalho escravo...)

	echo '<br><h4>Dados do Array Garagem (usando echo)</h4><br>';
	echo '<p>';
	echo '<b>Carro 1:</b><br>';
	echo 'Marca: '  . $garagem['Vaga1']['Marca']  . '<br>';
	echo 'Modelo: ' . $garagem['Vaga1']['Modelo'] . '<br>';
	echo 'Cor: '    . $garagem['Vaga1']['Cor']    . '<br>';
	echo 'Ano: '    . $garagem['Vaga1']['Ano']    . '<br>';
	echo '</p>';

	echo '<p>';
	echo '<b>Carro 2:</b><br>';
	echo 'Marca: '  . $garagem['Vaga2']['Marca']  . '<br>';
	echo 'Modelo: ' . $garagem['Vaga2']['Modelo'] . '<br>';
	echo 'Cor: '    . $garagem['Vaga2']['Cor']    . '<br>';
	echo 'Ano: '    . $garagem['Vaga2']['Ano']    . '<br>';
	echo '</p>';

	echo '<p>';
	echo '<b>Carro 3:</b><br>';
	echo 'Marca: '  . $garagem['Vaga3']['Marca']  . '<br>';
	echo 'Modelo: ' . $garagem['Vaga3']['Modelo'] . '<br>';
	echo 'Cor: '    . $garagem['Vaga3']['Cor']    . '<br>';
	echo 'Ano: '    . $garagem['Vaga3']['Ano']    . '<br>';
	echo '</p>';

	echo '<p>';
	echo '<b>Carro 4:</b><br>';
	echo 'Marca: '  . $garagem['Vaga4']['Marca']  . '<br>';
	echo 'Modelo: ' . $garagem['Vaga4']['Modelo'] . '<br>';
	echo 'Cor: '    . $garagem['Vaga4']['Cor']    . '<br>';
	echo 'Ano: '    . $garagem['Vaga4']['Ano']    . '<br>';
	echo '</p>';


	echo '<h2>Exibindo array com print_r</h2>';
	echo '<br>';
	echo '<pre>';
	print_r($garagem);
	echo '</pre>';

	?>

</body>
</html>