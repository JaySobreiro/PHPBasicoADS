<?php 

	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];
	$email   = $_POST['email'];

	include 'conn.php';

	$sql = "INSERT INTO tb_usuarios (usuario, senha, email) 
	VALUES ('$usuario', '$senha', '$email') ";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		echo 'Cadastrado com sucesso!';
	}
	else
	{
		echo 'Erro ao cadastrar...';
	}

?>