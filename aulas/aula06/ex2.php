<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 06 - Exemplo 02</title>
</head>
<body class="container-fluid">

	<?php include 'menu.php'; ?>

	<h1>Página 2 - Laços de Repetição</h1>

	<h2>Exemplo 01 - Laço 'for' (para)</h2>

	<?php  

	// para (i de 0 até 9 passo 1) faça
	for ($i=0; $i < 10 ; $i++) 
	{ 
		
		echo 'Valor atual do contador $i: ' . $i . "<br>\n\t";
	
		// \n : comando para inserir a próxima linha de código na
		// linha abaixo da anterior, no HTML

		// \t : insere uma tabulação (tab) antes do próximo texto
	}

	?>

	<br>
	<h2>Exemplo 02 - Laço 'while' (enquanto)</h2>

	<?php 

		$contador = 0;

		// enquanto (contador < 10) faça
		while($contador < 10)
		{
			echo 'Valor atual do $contador: ' . $contador . "<br>\n\t";
			$contador += 2; // mesma coisa que: $contador = $contador + 2;
		}

	?>

	<br>
	<h2>Exemplo 03 - Laço 'do/while' (faça/enquanto ou repita/até)</h2>

	<?php 

		$num = 0;

		do{

			echo 'Valor atual de $num: ' . $num . "<br>\n\t";

			$num--;

		}while($num > 0);

	?>

	<br>
	<h2>Exemplo 04 - Laço 'foreach' (para cada)</h2>
	<h5>OBS: este laço é próprio para percorrer <i>Arrays</i></h5>

	<?php  

		// declaração de um array qualquer...
		$nomes[] = "Huguinho";
		$nomes[] = "Zézinho";
		$nomes[] = "Luizinho";

		// declaração do laço foreach:
		// para cada (posição do array ____ copie seu valor para ____)
		foreach ($nomes as $valor) 
		{
			echo 'Valor atual de $valor: ' . $valor . "<br>\n\t";
		}

	?>

	<br>
	<h2>Exemplo 04b - Laço foreach completo</h2>

	<?php  

		foreach ($nomes as $indice => $valor) 
		{
		
			echo 'Nome na posição ' . $indice . ' do array $nomes: ' 
			. $valor . "<br>\n\t" ;

		}

	?>

	<br><br><br>

</body>
</html>