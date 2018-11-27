<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 14 - Home</title>
</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<h3 class="text-primary">MyEvents Manager 1.0</h3>

	<?php 
	if(!empty($_SESSION))
	{

		include 'conn.php';

		$id_usuario = $_SESSION['id_usuario'];
		$sql = "SELECT evento, prioridade, data FROM tb_evento WHERE tb_evento.id_usuario = $id_usuario AND prioridade LIKE 'Urgente' ORDER BY id_evento DESC LIMIT 0,4";

		$resultado = mysqli_query($conn, $sql);

		if (mysqli_affected_rows($conn) > 0)
		{
			$linha_atual = array();

			while($linha_atual = mysqli_fetch_assoc($resultado))
			{
				$nova_data = date("d/m/Y", strtotime($linha_atual['data']));

				echo '  <div class="card">
  							<h5 class="card-header">'.$linha_atual['evento'].'</h5>
							  <div class="card-body">
							    <h5 class="card-title">Prioridade: '.$linha_atual['prioridade'].'</h5>
							    <p class="card-text">Agendado para: '.$nova_data.'</p>
							    <a href="agenda.php" class="btn btn-primary">Ver na agenda</a>
							  </div>
						</div>';
			}
		}else{
			
			echo '<h3 class="text-primary">Sem eventos urgentes cadastrados</h3>';
		}

	}


	?>
</body>
</html>