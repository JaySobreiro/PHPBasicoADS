<h2 class="text-info">Entrar no sistema</h2>
<form name="login" action="validar.php" method="post">
	
	<p>
		<label>Usuário:</label><br>
		<input type="text" name="usuario" placeholder="Nome de usuário ou e-mail" size="30">
	</p>

	<p>
		<label>Senha:</label><br>
		<input type="password" name="senha" placeholder="Sua senha cadastrada" size="30">
	</p>

	<p>
		<button name="btn_logar" class="btn btn-primary">Login</button> | 
		<a href="cadastrar.php">Cadastre-se!</a>
	</p>

</form>