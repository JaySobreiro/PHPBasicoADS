<?php include 'lock.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Aula 11 - Perfil</title>

</head>
<body class="container">

	<?php include 'menu.php'; ?>

	<h2>Meu Perfil - <span class="text-info">Bem vindo, <?php echo $_SESSION['usuario']; ?></span></h2>

	<br>
	<?php  

	include 'conn.php';

	$usuario = $_SESSION['usuario'];
	$senha	 = $_SESSION['senha'];
	$email   = $_SESSION['email'];


	?>


	<div class="card" style="width: 30rem;">
	  
		<div class="card-body">
	    	<h5 class="card-title">Dados Cadastrados</h5>
	    		<p class="card-text">
	    			<b>Usuário:</b> <?php echo $usuario ?> <br>
	    			<b>Senha:</b> <?php echo $senha ?> <br>
	    			<b>E-mail:</b> <?php echo $email ?> <br>
	    		</p>
	    	<p>
  				<a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Editar Dados
  				</a>
			</p>
	  	</div>
	

		<div class="collapse" id="collapseExample">
	  		<div class="card card-body">
	    
	    		<form name="editar_user" action="user_edt.php" method="post">
	    			
	    			<p>
	    				<label>Usuário:</label><br>
	    				<input type="text" name="usuario" value="<?php echo $usuario; ?>">
	    			</p>

	    			<p>
	    				<label>Senha:</label><br>
	    				<input type="password" name="senha" value="<?php echo $senha; ?>">
	    			</p>

	    			<p>
	    				<label>E-mail:</label><br>
	    				<input type="email" name="email" value="<?php echo $email; ?>">
	    			</p>

	    			<p>
	    				<button name="edt_user" type="submit" class="btn btn-warning">Editar</button>
	    			</p>

	    		</form>		

	  		</div>
		</div>	
	</div>


	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  
</body>
</html>