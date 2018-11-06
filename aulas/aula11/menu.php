<?php 
if(session_status() == PHP_SESSION_NONE) 
{
	session_start();
}

if (empty($_SESSION['usuario']) || empty($_SESSION['senha']))
{ 
?>

<br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="nav-link">Home</a>
	</li>
	<li class="nav-item">
		<a href="login.php" class="nav-link">Login</a>
	</li>
	<li class="nav-item">
		<a href="cadastrar.php" class="nav-link">Cadastre-se</a>
	</li>
</ul>
<br>

<?php } else { ?>

<br>
<ul class="nav">
	<li class="nav-item">
		<a href="index.php" class="nav-link">Home</a>
	</li>
	<li class="nav-item">
		<a href="perfil.php" class="nav-link">Meu Perfil</a>
	</li>
	<li class="nav-item">
		<a href="logout.php" class="nav-link">Logout</a>
	</li>
</ul>
<br>

<?php  }  ?>


