<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Pagina Principal</title>
	<link href="{{ asset('css/semantic.min.css') }} " rel="stylesheet" type="text/css"/>
	<link href="{{ asset('css/semantic.css') }} " rel="stylesheet" type="text/css"/>
	@yield('scripts')

</head>

<body>
<div>
<header id="header">
</header>
	<div>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<p class="navbar-brand"><strong >Sistema de gestao dos trabalhos de Licenciatura</strong></p>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#"><strong>Pagina inicial</strong> <span class="sr-only">(current)</span></a></li>
						<li><a href="#"><strong>Trabalhos de Licenciatura</strong></a></li>
						<li><a href="#"><strong>Sobre</strong></a></li>
						<li><a href="#"><strong>Contacte-nos</strong></a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><button class="btn btn-success glyphicon glyphicon-lock"><strong>Sin in</strong></button></a></li>
						<li><a href="#"><button class="btn btn-success glyphicon glyphicon-user"><strong>Sig up</strong></button></a></li>
					</ul>
					{{--<form class="navbar-form navbar-left">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Pesquisar">
						</div>
						<button type="submit" class="btn btn-default">Pesquisar</button>
					</form>--}}
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
</div>
<div id="container">
	<main id="center" class="column">
		@yield('message')
		@yield('content')
	</main>

	<div id="left" class="column">
			<div class="jumbotron">
				<div class="panel panel-default" style="width: inherit; height: inherit;">
					<div align="center" class="panel-heading">Sistema de Gestao dos Trabalhos do final do curso</div>
					<div align="center" class="panel-body"><a><img src="{{asset("/pic/chapeu.jpg")}} "    style="height: 100px;width: 100px;"><p>Consulte a progressao do seu estudante</p></a></div>
					<div align="center" class="panel-body"><a><img src="{{asset("/pic/professor.jpg")}} " style="height: 100px;width: 100px;"><p>Faca Gestao do seus Docentes</p></a></div>
					<div align="center" class="panel-body"><a><img src="{{asset("/pic/icon.png")}} "      style="height: 100px;width: 100px;"><p>Visualizar trabalhos realizados pelos estudantes</p></a></div>
				</div>
			</div>
	</div>

	<div id="right" class="column">
		<div class="jumbotron">
			<div class="panel panel-default" style="width: inherit; height: inherit;">
				<div class="panel-heading">Trabalhos defendidos pelos estudantes</div>
				<div class="panel-body"><a href="#">Sistemas de gestao do horario da Faculdade</a></div>
				<div class="panel-body"><a href="#">Sistemas de gestao dos trabalhos de Licenciatura</a></div>
				<div class="panel-body"><a href="#">Sistemas de gestao...</a></div>
				<div class="panel-body"><a href="#">Sistemas de gestao ...</a></div>
				<div class="panel-body"><a href="#">Ver mais...</a></div>
			</div>
		</div>
	</div>

</div>

<div id="footer-wrapper">
	<footer id="footer"><p> © Copyright 2017 UEM-FENG|Desenvolvido pela DreamTeam</p></footer>
</div>

</body>

</html>
