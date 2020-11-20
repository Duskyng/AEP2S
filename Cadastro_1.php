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
									<label for="exampleInputEmail1"> Email </label>
									<input type="email" class="form-control" name="" aria-describedby="emailHelp" placeholder="Enter email">
									<small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Senha</label>
									<input type="password" class="form-control" id="exampleInputPassword1" name="" placeholder="Password">
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
			<button type="button" class="btn " ><a>Cadastrar-se</a></button>
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
					<a class="nav-link active" href="">Perfil</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Hábitos alimentares</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Rotina de exercícios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="">Finalização</a>
				</li>
			</ul>
			<div class="fundo">
				<form action="dados.php" method="get" name="forms">
					<div class="form-row">
						<div class="col-md-4 mb-3">
							<label for="validationDefault01">Nome Completo</label>
							<input type="text" class="form-control" id="validationDefault01" name="nome" placeholder="Ex:Jonas da Silva" value="" required>
						</div>
						<div class="col-md-4 mb-3">
							<label for="validationDefault02">Data de Nascimento</label>
							<input type="date" class="form-control" name="data" id="validationDefault02" placeholder="Last name" value="" required>
						</div>
						<div class="col-md-4 mb-3">
							<label for="validationDefaultUsername">Telefone</label>
							<div class="input-group">
								<input type="tel" class="form-control" name="tel" id="validationDefaultUsername" placeholder="Ex: 55 44 99999-9999" pattern="[0-9]{2} [0-9]{2} [0-9]{5}-[0-9]{4}" required>							
							</div>							
						</div>
					</div>
					<div class="form-row">
						<div class="col-md-6 mb-3">
							<label for="validationDefault03">E-mial</label>
							<input type="email" class="form-control" name="email" id="validationDefault03" placeholder="Ex: jonas@example.com" required>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationDefault04">Senha</label>
							<input type="text" class="form-control" name="senha" id="validationDefault04" placeholder="" required>
							<label class=tamanho for="validationDefault03">*mínimo 8 caractéres</label>
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationDefault05">Confirmar senha</label>
							<input type="text" class="form-control" name="" id="validationDefault05" placeholder="" required>
						</div>
					</div>
					<div class="form-row">					
						<div class="col-md-3 mb-3">
							<label for="validationDefault04">Informe o seu peso</label>
							<input type="text" class="form-control" id="peso" name="peso" placeholder="Ex:056,56" pattern="[0-9]{3}.[0-9]{2}" required>							
						</div>
						<div class="col-md-3 mb-3">
							<label for="validationDefault05">Informar altura</label>
							<input type="text" class="form-control" id="altura" name="altura" placeholder="Ex:180 "
							pattern="[0-9]{3}" required>							
						</div>
					</div>
					<div class="form-group">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
							<label class="form-check-label" for="invalidCheck2">
								<a href="termos_de_uso.php"> Eu li e concordo com os termos de uso.</a>
							</label>
						</div>
					</div>
					<button class="btn botao" name="enviar "type="submit"><a href="cadastro_alimentacao.php">Continuar</a></button>
				</form>
			</div>


		</div>
	</div>
	<br>


</body>
</html>