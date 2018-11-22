<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 14 - Minha Agenda</title>
</head>
<body class="container">

	<?php 

	include 'menu.php'; 
	include 'func.php';

	verificar_msg();

	?>

	<h3 class="text-primary">
		Minha Agenda - 
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#formModalCenter">
  			Novo Evento
		</button>
	</h3>


	<!-- Modal -->
	<div class="modal fade" id="formModalCenter" tabindex="-1" role="dialog" aria-labelledby="formModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="formModalCenterTitle">Novo Evento</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <?php include 'form_evento.php'; ?>
	      </div>
	    </div>
	  </div>
	</div>


	<?php  

	include 'conn.php';

	$id_usuario = $_SESSION['id_usuario'];

	$sql = "SELECT id_evento, evento, prioridade, data FROM tb_evento 
	INNER JOIN tb_usuarios ON tb_evento.id_usuario = tb_usuarios.id_usuario 
	WHERE tb_evento.id_usuario = $id_usuario";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		
		$linha_atual = array();
		echo '<br>';
		echo '<table class="table table-hover table-bordered">';
		echo '<tr>';
		echo '<th>Evento #</th>';
		echo '<th>Descrição</th>';
		echo '<th>Prioridade</th>';
		echo '<th>Data</th>';
		echo '<th colspan="2" class="text-center">Ações</th>';
		echo '</tr>';

		while ($linha_atual = mysqli_fetch_assoc($resultado)) 
		{
			
			echo '<tr>';
			foreach ($linha_atual as $coluna_atual => $valor) 
			{
				echo '<td>'.$valor.'</td>';
				if($coluna_atual == 'id_evento')
				{
					$id_evento = $valor;
				}
			}

			echo '<td class="text-center">
					<a href="editar.php?id_evento='.$id_evento.'" class="btn btn-warning">Editar</a>
				  </td>';

			echo '<td class="text-center">
					<a href="deletar.php?id_evento='.$id_evento.'" class="btn btn-danger">Deletar</a>
				  </td>';

			echo '</tr>';
		}
		echo '</table>';

	}
	else
	{
		echo '<p><h4 class="alert alert-info">Ainda não há eventos cadastrados</h4></p>';
	}

	?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>