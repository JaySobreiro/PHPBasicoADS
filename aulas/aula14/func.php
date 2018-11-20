<?php  

function validar_form_cad()
{

	if( empty($_POST['usuario']) || 
		empty($_POST['senha'])   || 
		empty($_POST['email']) ) 
	{
		header('location:cadastro.php?msg=emptyFields');
		exit;
	}
}

function verificar_msg()
{
	if($_GET['msg'])
	{
		$msg = $_GET['msg'];

		if($msg == 'emptyFields')
		{
			echo '<h3 class="alert alert-warning">ATENÇÃO: Preencha todos os campos do formulário.</h3>';
		}
	}
}




?>