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

function validar_form_evento()
{
	if( empty($_POST['evento']) ||
		empty($_POST['data']) )
	{
		header('location:agenda.php?msg=emptyFields');
		exit;
	}
}

function verificar_msg()
{
	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		if($msg == 'emptyFields')
		{
			echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  					<h4><strong>ATENÇÃO:</strong></h4>
  					<p>Preencha todos os campos do formulário.</p>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				 </div>';
		}
		else if($msg == 'cadSuccess')
		{
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  					<h4><strong>SUCESSO!</strong></h4>
  					<p>Seu cadastro foi efetuado!</p>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				 </div>';
		}
		else if($msg == 'cadError')
		{
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					<h4><strong>ATENÇÃO:</strong></h4> Nome de usuário ou email já cadastrado!
  					<p>Informe outros dados e ente novamente.</p>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				 </div>';
		}
		else if($msg == 'loginError')
		{
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					<h4><strong>ATENÇÃO:</strong></h4> Nome de usuário, email ou senha inválidos!
  					<p>Informe outros dados e ente novamente.</p>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				 </div>';
		}
		else if($msg == 'eventoCad')
		{
			echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  				<h4><strong>SUCESSO!</strong></h4> Seu evento foi cadastrado!
  				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    				<span aria-hidden="true">&times;</span>
  				</button>
				</div>';
		}
		else if($msg == 'eventoError')
		{
			echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  					<h4><strong>ATENÇÃO:</strong></h4> Não foi possível cadastrar seu evento
  					<p>Tente novamente ou contate o suporte.</p>
  					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
  					</button>
				 </div>';
		}
	}
}




?>