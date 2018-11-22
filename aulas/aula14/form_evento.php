<p>
	<form name="cad_evento" action="cad_evento.php" method="post">
		
		<p>
			<label>Descrição:</label><br>
			<input type="text" name="evento">
		</p>

		<p>
			<label>Prioridade:</label><br>
			<input type="radio" name="prioridade" value="Normal" checked> Normal
			<br>
			<input type="radio" name="prioridade" value="Urgente"> Urgente
		</p>

		<p>
			<label>Data:</label><br>
			<input type="date" name="data">
		</p>

		<p>
			<button type="button" class="btn btn-secondary" data-dismiss="modal">
				Fechar
			</button>
			<button type="submit" class="btn btn-primary">
				Salvar
			</button>
		</p>

	</form>
</p>