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
							<button type="button" class="btn botao"><a href="AEP.php">Entrar</a></button>
						</div>
					</div>
				</div>
			</div>
			<button type="button" class="btn " >Cadastrar-se</button>
		</div>
	</nav>
	<div class="maior">
		<h2>Ajuda!</h2>
		<div class="menor">
			<h3> Dúvidas recorrentes</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, pulvinar inceptos vehicula iaculis vivamus fringilla interdum, fermentum massa ante egestas ut. Fringilla nulla vel tempor fames purus quis placerat leo ligula massa, aptent neque nisl mauris proin nascetur consectetur ipsum litora quisque potenti, sem ultricies inceptos eu himenaeos habitant felis duis phasellus.</p>

			<p>Est arcu lobortis elit dictum sociosqu taciti justo volutpat, erat tincidunt quisque iaculis tortor accumsan ultricies porttitor. Tellus ante dis himenaeos quam potenti ullamcorper fringilla, conubia ac lacinia integer magnis amet netus fusce, odio lectus nullam interdum turpis taciti.</p>

			<p>Vel sit cubilia fermentum efficitur condimentum montes ornare, potenti sociosqu sollicitudin urna amet venenatis est facilisi, donec malesuada maecenas commodo velit bibendum. Molestie rhoncus massa fermentum donec conubia nam commodo erat  ultricies sociosqu eget, taciti nam mi nulla felis sem hendrerit finibus, blandit ultrices ut vitae tortor quam ridiculus.</p>

			<p>Diam non libero adipiscing ullamcorper iaculis integer ex torquent odio arcu, placerat ligula primis facilisis molestie donec fermentum fus. Cras nuc elit lacus convallis ultrices accumsan turpis adipiscing vulputate potenti facilisis pulvinar scelerisque sociosqu arcu, laoreet platea nam class tincidunt placerat.</p>


			<h4>Caso seu problema não tenha sido resolvido, envie um e-mail relatando o problema para:</h4>
			<p>companionAjuda@gmail.com</p>		
			
		</div>
		<div class="B">
			<button type="button" class="btn botao">Voltar</button>
		</div>
		

	</div>

</body>
</html>