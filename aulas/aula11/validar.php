<?php 
// se não receber usuario e senha do formulário:
if(empty($_POST['usuario']) || empty($_POST['senha']))
{
	// redireciona para página de login com msg de erro
	header('location:login.php?msg=emptyFields');
}
else
{
	$usuario = $_POST['usuario'];
	$senha   = $_POST['senha'];

	include 'conn.php';

	$sql = "SELECT usuario, senha FROM tb_usuarios 
	WHERE (usuario LIKE '$usuario' OR email LIKE '$usuario') 
	AND senha LIKE '$senha'";

	$resultado = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$login = mysqli_fetch_assoc($resultado);

		session_start();
		$_SESSION['usuario'] = $login['usuario'];
		$_SESSION['senha']   = $login['senha'];

		header('location:perfil.php');
	}
	else
	{
		header('location:login.php?msg=loginError');
	}
}


?>