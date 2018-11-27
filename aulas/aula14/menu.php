<?php  
if(session_id() == '') // session_status() == PHP_SESSION_NONE
{// se não houver sessão ativa
	session_start(); // inicie sessão
}
if(empty($_SESSION)) 
{// se a variável de sessão estiver vazia (você não está logado)
	// cria menu 'A':
	$itens = '<li class="nav-item">
		<a href="cadastro.php" class="nav-link">Cadastre-se</a>
	</li>
	<li class="nav-item">
		<a href="login.php" class="nav-link">Entrar</a>
	</li>';
}
else // senão
{
	// cria menu 'B':
	$itens = '<li class="nav-item">
		<a href="agenda.php" class="nav-link">Minha Agenda</a>
	</li>
	<li class="nav-item">
		<a href="logout.php" class="nav-link">Sair</a>
	</li>';
}

?>

<br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php"  class="nav-link">Home</a>
	</li>
	<?php echo $itens; ?>	
</ul>
<br>