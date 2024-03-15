<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Robots | Quem Somos </title>

	<!-- Bootstrap -->
	<link href="assets/css/bootstrap.css" rel="stylesheet">

	<!-- folha de estilo customizado -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/color.css" rel="stylesheet">

	<!-- folha de estilo FontAwesome -->
	<link rel="stylesheet" href="assets/font/font-awesome-4.6.3/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<header>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarCollapse" aria-expanded="false">
					<a href="#menu-toggle" id="menu-toggle">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
				</button>
				<a href="index.html">
					<img class="img-robots-header" src="assets/img/logo-robots.png" alt="image">
					<div class="font-logo-header"></div>
				</a>
			</div> <!-- fim div .navbar-header -->

			<div class="navbar-collapse collapse" id="">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="#" target="_blank">
							<i class="fa fa-globe" aria-hidden="true"></i>
							Visualizar site
						</a>
					</li>
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-user" aria-hidden="true"></i>
							Steve Zoe
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="perfil-user.html"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
						</ul> <!-- fim ul .dropdown-menu -->
					</li> <!-- fim li .dropdown -->
				</ul> <!-- fim ul .nav .nav-bar .navbar-right -->
			</div> <!-- fim div .navbar-collapse .collapse #navbarCollapse -->
		</div> <!-- fim div .container -->
	</nav> <!-- fim nav .navbar .navbar-inverse .navbar-fixed-top -->
</header>

<div id="wrapper">
	<!-- Sidebar -->
	<div id="sidebar-wrapper">
		<ul class="sidebar-nav">
			<!-- logo cliente -->
			<li>
				<img class="img-cliente-sidebar" src="assets/img/logo-cliente.png" alt="image">
			</li>
			<!-- end logo cliente -->

			<!-- menu -->
			<li class="active">
				<a class="border-a-menu" href="dashboard.html">
					<i class="fa fa-dashboard i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Dashboard</span>
				</a>
			</li>
			<!--Drop menu -->
			<li>
				<a href="#drop1" class="list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-rss i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Blog</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse ul-dropdown-color" id="drop1" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="novo-post.html">
							<i class="fa fa-pencil" aria-hidden="true"></i>
							<span class="margin-font">Escrever novo Post</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="meus-post.html">
							<i class="fa fa-rss-square" aria-hidden="true"></i>
							<span class="margin-font">Minhas Postagens</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="todas-posts.html">
							<i class="fa fa-commenting " aria-hidden="true"></i>
							<span class="margin-font">Todas as Postagens</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<!--Drop menu -->
			<li>
				<a href="#drop3" class="list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-home fa-lg i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Pagina Home</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse ul-dropdown-color" id="drop3" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="slide-home.html">
							<i class="fa fa-image" aria-hidden="true"></i>
							<span class="margin-font">Slide</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="add-slide.html">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<span class="margin-font">Adicionar Slide</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<!--Drop menu -->
			<li>
				<a href="#drop2" class="list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-users i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Pagina Meus Clientes</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse ul-dropdown-color" id="drop2" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="descri-cliente.html">
							<i class="fa fa-commenting" aria-hidden="true"></i>
							<span class="margin-font">Descrição</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="listar-clientes.html">
							<i class="fa fa-users" aria-hidden="true"></i>
							<span class="margin-font">Lista de clientes</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="add-cliente.html">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<span class="margin-font">Add novo clientes</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<!--Drop menu -->
			<li>
				<a href="#drop4" class="list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-users i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Pagina Meus Parceiros</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse ul-dropdown-color" id="drop4" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="descri-cliente.html">
							<i class="fa fa-commenting" aria-hidden="true"></i>
							<span class="margin-font">Descrição</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="listar-parceiro.html">
							<i class="fa fa-users" aria-hidden="true"></i>
							<span class="margin-font">Lista de Parceiros</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="add-parceiro.html">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<span class="margin-font">Add novo Parceiro</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<!--Drop menu -->
			<li>
				<a href="#drop5" class="list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-briefcase i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Pagina Meus Serviços</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse ul-dropdown-color" id="drop5" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="descri-servicos.html">
							<i class="fa fa-commenting" aria-hidden="true"></i>
							<span class="margin-font">Descrição</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="listar-servicos.html">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<span class="margin-font">Lista Meus Serviços</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="add-servicos.html">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<span class="margin-font">Add novos Serviços</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<!--Drop menu -->
			<li>
				<a href="#drop6" class="link-ativo list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-users i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Pagina Quem Somos</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse in ul-dropdown-color" id="drop6" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="descri-quem-somos.html">
							<i class="fa fa-commenting" aria-hidden="true"></i>
							<span class="margin-font">Descrição</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="slide-quem-somos.html">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<span class="margin-font">Slide</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<!--Drop menu -->
			<li>
				<a href="#drop7" class="list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-location-arrow i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Pagina Localização</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse ul-dropdown-color" id="drop7" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="descri-localizaçao.html">
							<i class="fa fa-commenting" aria-hidden="true"></i>
							<span class="margin-font">Descrição</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="endereco.htmlml">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<span class="margin-font">Endereço</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="mapa.html">
							<i class="fa fa-map" aria-hidden="true"></i>
							<span class="margin-font">Mapas</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<!--Drop menu -->
			<li>
				<a href="#drop10" class="list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-user i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Equipe</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse ul-dropdown-color" id="drop10" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="descri-equipe.html">
							<i class="fa fa-commenting" aria-hidden="true"></i>
							<span class="margin-font">Descrição</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="listar-equipe.html">
							<i class="fa fa-briefcase" aria-hidden="true"></i>
							<span class="margin-font">Lista Equipe</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="add-equipe.html">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<span class="margin-font">Add novo membro equipe</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<!--Drop menu -->
			<li>
				<a href="#drop8" class="list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-envelope i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Pagina Contato</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse ul-dropdown-color" id="drop8" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="descri-contato.html">
							<i class="fa fa-commenting" aria-hidden="true"></i>
							<span class="margin-font">Descrição</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="add-equipe.html">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<span class="margin-font">Configuração de Email</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<!--Drop menu -->
			<li>
				<a href="#drop9" class="list-group border-a-menu" data-toggle="collapse" data-parent="#MainMenu" style="margin-bottom: 0px !important;">
					<i class="fa fa-key i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Usuários do Admin</span>
					<i class="fa fa-sort-desc i-ajuste-right" aria-hidden="true"></i>
				</a>
				<ul class="list-group collapse ul-dropdown-color" id="drop9" style="margin-bottom: 0px !important;">
					<li>
						<a class="border-a-menu" href="listar-usuarios.html">
							<i class="fa fa-user" aria-hidden="true"></i>
							<span class="margin-font">Listar Usuarios</span>
						</a>
					</li>
					<li>
						<a class="border-a-menu" href="dashboard.html">
							<i class="fa fa-plus" aria-hidden="true"></i>
							<span class="margin-font">Add Usuarios</span>
						</a>
					</li>
				</ul>
			</li>
			<!-- fim Drop menu -->

			<li>
				<a class="border-a-menu" href="page-social-midia.html">
					<i class="fa fa-user i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Midia Social</span>
				</a>
			</li>
			<li>
				<a class="border-a-menu" href="dashboard.html">
					<i class="fa fa-cogs i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Configurações</span>
				</a>
			</li>
			<li>
				<a class="border-a-menu" href="dashboard.html">
					<i class="fa fa-sign-out i-ajuste" aria-hidden="true"></i>
					<span class="margin-font">Sair</span>
				</a>
			</li>


		</ul> <!-- fim ul .sidebar-nav -->
	</div><!-- fim div #sidebar-wrapper -->
	<!-- fim Sidebar -->

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<h2 id="subir"><i class="fa fa-commenting" aria-hidden="true"></i> Descrição de Quem Somos</h2>
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Pagina Quem Somos</a></li>
						<li class="active">Descrição Quem Somos</li>
					</ol>
					<div class="separador-1"></div> <!-- fim div .separador-1 -->
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong>Tudo certo!</strong>
						Suas alterações foram salvas!
						<strong>:)</strong>
					</div>

					<div class="alert alert-danger alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<strong>Ops!</strong>
						Algo deu errado, volte e arrume os campos abaixo!
						<strong>:(</strong>
					</div>

					<div class="row">
						<div class="col-md-8 col-sm-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Descrição da Empresa</label>
								<textarea class="form-control" rows="10"></textarea>
								<p class="text-info">
									<i class="fa fa-question-circle " aria-hidden="true"></i>
									No campo acima faça uma descrição detalhada de sua empresa!
								</p>
							</div><!-- fim div .input-group -->

							<div class="form-group">
								<label for="exampleInputEmail1">Descrição do Box "Por que nos escolher"</label>
								<textarea class="form-control" rows="10"></textarea>
								<p class="text-info">
									<i class="fa fa-question-circle " aria-hidden="true"></i>
									No campo acima faça uma descrição do por que o cliente deve nos escolher!
								</p>
							</div><!-- fim div .input-group -->

							<div class="form-group">
								<label for="exampleInputEmail1">Descrição do Box "Nossos Valores"</label>
								<textarea class="form-control" rows="10"></textarea>
								<p class="text-info">
									<i class="fa fa-question-circle " aria-hidden="true"></i>
									No campo acima faça uma descrição dos Valores da empresa!
								</p>
							</div><!-- fim div .input-group -->

							<div class="form-group">
								<label for="exampleInputEmail1">Descrição do Box "Visão"</label>
								<textarea class="form-control" rows="10"></textarea>
								<p class="text-info">
									<i class="fa fa-question-circle " aria-hidden="true"></i>
									No campo acima faça uma descrição da visão da empresa!
								</p>
							</div><!-- fim div .input-group -->

							<button type="submit" class="btn btn-success" id="subir">
								<i class="fa fa-check-square-o"></i>
								Salvar
							</button>



						</div><!-- fim div .col-md-12 -->
					</div><!-- fim div .row -->
				</div> <!-- fim div .col-lg-12 -->
			</div>  <!-- fim div .row -->
		</div> <!-- fim div .container-fluid -->
	</div> <!-- fim div #page-content-wrapper -->
	<!-- fim Page Content -->
</div>  <!-- fim div #wrapper -->

<!-- footer -->
<footer class="bg-footer">
	<div class="container">
		<div class="row">

		</div> <!-- fim div row -->
	</div> <!-- fim div .container -->
</footer>
<!-- fim footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.js"></script>

<script>
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");
	});
</script>
</body>
</html>