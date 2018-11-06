<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Página Inicial</title>
</head>
<body>

	<h1>Página Inicial</h1>
	<p>Esta é a página principal</p>
	<p>Este é outro parágrafo (ah, vá...)</p>	

	Este é um texto comum.
	Este texto NÃO estará na linha de baixo.
	<br>Mas este, sim.<br>
	Este texto     não      terá    espaços    adicionais.

	<p>Texto &nbsp;&nbsp;&nbsp;&nbsp; com muitos
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; espaços.</p>

	<p align="center"><b>Outros exemplos de tags:</b></p>

	<h2>Título 2</h2>
	<h3>Título 3</h3>
	<h4>Título 4</h4>
	<h5>Título 5</h5>
	<h6>Título 6</h6>

	<?php 

	// declaração de variáveis:
	$nome = "Jason Sobreiro";
	$idade = 31;

	// mostrar na tela as variáveis:
	echo "Meu nome é <b>" . $nome . "</b> e tenho " . $idade . " anos";

	?>

</body>
</html>