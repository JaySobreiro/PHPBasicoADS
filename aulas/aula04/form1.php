<form name="dados_aluno" method="post" action="respostas.php">

	<h2>Dados do Aluno</h2>

	<p>
		<label>Nome:</label><br>
		<input type="text" name="nome" class="campo">
	</p>

	<p>
		<label>Matrícula:</label><br>
		<input type="number" name="matricula" class="campo">
	</p>

	<p>
		<label>Selecione seu curso:</label><br>
		<select name="curso" class="campo">
			<option value="ADS" selected>Análise e Desen. de Sistemas</option>
			<option value="BSI">Sistemas de Informação</option>
			<option value="JD">Jogos Digitais</option>
		</select>
	</p>

	<p>
		<label>Campus:</label><br>
		<input type="radio" name="campus" value="Osório" checked > Osório <br>
		<input type="radio" name="campus" value="Santos Andrade"> Santos Andrade <br>
		<input type="radio" name="campus" value="Ecovile"> Ecovile
	</p>

	<p>
		<button type="submit" name="salvar_aluno" class="btn btn-outline-success">Salvar</button> 
		<button type="reset" class="btn btn-outline-warning">Limpar</button>
	</p>

</form>