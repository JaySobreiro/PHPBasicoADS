<?php  include 'lock.php';

	include 'conn.php';
	include 'func.php';

	validar_form_evento();

	$evento 	= $_POST['evento'];
	$prioridade = $_POST['prioridade'];
	$data 		= $_POST['data'];
	$id_usuario = $_SESSION['id_usuario'];

	$sql = "INSERT INTO tb_evento (evento, prioridade, data, id_usuario) 
	VALUES ('$evento', '$prioridade', '$data', $id_usuario)";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:agenda.php?msg=eventoCad');
	}
	else
	{
		header('location:agenda.php?msg=eventoError');
	}
?>