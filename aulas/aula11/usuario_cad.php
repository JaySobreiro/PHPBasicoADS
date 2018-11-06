<?php  
if(empty($_POST['usuario']) || empty($_POST['senha']) || 
	empty($_POST['email']))
{
	header('location:cadastrar.php?msg=emptyFields');
}
else
{
	$usuario = $_POST['usuario'];
	$senha	 = $_POST['senha'];
	$email	 = $_POST['email'];

	include 'conn.php';

	$sql = "SELECT usuario, email FROM tb_usuarios WHERE 
	usuario LIKE '$usuario' OR email LIKE '$email' ";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:cadastrar.php?msg=cadInvalid');
	}
	else
	{
		$sql = "INSERT INTO tb_usuarios (usuario, senha, email)
		VALUES ('$usuario', '$senha', '$email')";

		$resultado = mysqli_query($conn, $sql);

		if($resultado)
		{
			header('location:login.php?msg=cadSuccess');
		}
		else{
			header('location:cadastrar.php?msg=cadError');
		}
	}
}

?>