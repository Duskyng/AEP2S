<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<script src="https://kit.fontawesome.com/b252e65604.js" crossorigin="anonymous"></script>
	<title>Companion Health</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estio.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light cor">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<span class="fas fa-heartbeat fa-2x icon"></span>
		<a class="navbar-brand " href="AEP">Companion Health</a>		
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="AEP">Início<span class="sr-only">(current)</span></a>
				</li>
				
				<li class="nav-item active">
					<a class="nav-link" href="ajuda.php">Ajuda<span class="sr-only">(current)</span></a>
				</li>

				<li class="nav-item active">
					<a class="nav-link" href="Fale_Conosco.php">Fale conosco<span class="sr-only">(current)</span></a>
				</li>			
			</ul>	

			<button type="button" class="btn " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Login</button>

			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Login</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label for="exampleInputEmail1">Email </label>
									<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									<small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Senha</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Deseja deixar senha salva?</label>
								</div>							
								
								<p><a href="Cadastro_1.php">Não sou cadastrado.</a></p>
								<p><a href="RecuperarSenha.php">Esqueci a senha.</a></p>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn botao" data-dismiss="modal">Sair</button>
							<a href="AEP.php"><button type="button" class="btn botao">Entar</button></a>
						</div>
					</div>
				</div>
			</div>
			<button type="button" class="btn " >Cadastrar-se</button>
		</div>
	</nav>
	<div class="cadastro2">
		<span class="fas fa-user-plus fa-3x"></span>
		<h4>Cadastro</h4>		
	</div>
	<div class="container">
		<div class="row P">
			<ul class="nav nav-tabs">
				<li class="nav-item">
					<a class="nav-link " href="">Perfil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="">Hábitos alimentares</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Rotina de exercícios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Finalização</a>
				</li>
			</ul>
			<div class="fundo">
				<div class="msg">
					<p>*Agora vamos montar sua rotina alimentar para o café da manhã, almoço e janta, com base em sugestões pré-definidass </p>
				</div>
				<form>
					<div class="form-group">
						<b><label class="sublin" for="exampleFormControlSelect1">Começando pelo café da manhã</label></b>
						<br>
						<label for="exampleFormControlSelect1">Para começar o dia você costuma comer:</label>
						<select class="form-control" id="exampleFormControlSelect1">							
							<option>1 - Uma fatia de bolo com leite.</option>
							<option>2 - Uma fatia de pão caseiro com manteiga e uma xícara de café. </option>
							<option>3 - Ovos mexidos e bacon com suco de laranja.</option>
							<option>4 - Eu não como nada pela manhã.</option>							
						</select>
					</div>
					<div class="custom-control custom-radio">
						<p class="sublin"><b>Costuma repetir?</b></p>
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio1">Sim</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio2">Não</label>
					</div>
					<br>
					<div class="form-group">
						<b><label class="sublin" for="exampleFormControlSelect1">Agora seu almoço</label></b>
						<br>
						<label for="exampleFormControlSelect1">No almoço você costuma comer.</label>
						<select class="form-control" id="exampleFormControlSelect1">							
							<option>1 - Fritas, humburguer e refrigerante.</option>
							<option>2 - Arroz, feijoada e farofa. </option>
							<option>3 - Lasanha.</option>
							<option>4 - Pastel e refrigerante.</option>	
							<option>5 - Macarrão ao molho.</option>
							<option>6 - Arroz, feijão com bife e fritas.</option>						
						</select>
					</div>
					<div class="custom-control custom-radio">
						<p class="sublin"><b>Costuma repetir?</b></p>
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio1">Sim</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio2">Não</label>
					</div>
					<br>
					<div class="form-group">
						<b><label class="sublin" for="exampleFormControlSelect1">Agora sua janta</label></b>
						<br>
						<label for="exampleFormControlSelect1">Na janta você costuma comer.</label>
						<select class="form-control" id="exampleFormControlSelect1">							
							<option>1 - Cachorrão.</option>
							<option>2 - Pizza. </option>
							<option>3 - Sorvete de açai com adjetivos.</option>
							<option>4 - Miojo.</option>	
							<option>5 - Hamburguer, fritas e refrigerante.</option>
							<option>6 - Salgadinho de pacote.</option>
							<option>7 - Arroz, feijão e frango.</option>						
						</select>
					</div>
					<div class="custom-control custom-radio">
						<p class="sublin"><b>Costuma repetir?</b></p>
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio1">Sim</label>
					</div>
					<div class="custom-control custom-radio">
						<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
						<label class="custom-control-label" for="customRadio2">Não</label>
					</div>
					<br>	

					
					<button class="btn botao" type="submit"><a href="cadastro_exercicios.php">Continuar</a></button>
				</form>
			</div>


		</div>
	</div>
	<br>


</body>
</html>