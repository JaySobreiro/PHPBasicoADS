<?php include 'lock.php';

if(empty($_POST['usuario']) || empty($_POST['senha']) || empty($_POST['email']) )
{
	header('location:perfil.php');
}
else
{
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];
	$email   = $_POST['email'];

	$log_user  = $_SESSION['usuario'];
	$log_senha = $_SESSION['senha'];
	$log_email = $_SESSION['email'];

	include 'conn.php';

	$sql = "UPDATE tb_usuarios SET usuario = '$usuario', senha = '$senha', email = '$email' 
	WHERE usuario LIKE '$log_user' AND senha LIKE '$log_senha' AND email LIKE '$log_email' ";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha']   = $senha;
		$_SESSION['email']   = $email;
		header('location:perfil.php?msg=userUpdated');
	}
	else
	{
		header('location:perfil.php?msg=errorUpdate');
	}
}


?>