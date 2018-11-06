<?php  
	// verificar se o campo enviado via URL chamado 'id' está vazio:
	if(empty($_GET['id']))
	{
		// redireciona usuário para página gerenciar.php enviando
		// o parâmetetro 'msg' via URL com o valor 'delError'
		header('location:gerenciar.php?msg=delError');
	}
	else
	{
		// receber id
		$id = $_GET['id'];

		// incluir arquivo de conexão
		include 'conn.php';

		// criar comando sql
		$sql = "DELETE FROM tb_convidados WHERE id = $id";

		// executa comando sql
		$resultado = mysqli_query($conn, $sql);

		if($resultado)
		{
			header('location:gerenciar.php?msg=delSuccess');
		}else{
			header('location:gerenciar.php?msg=delError');
		}
	}


?>