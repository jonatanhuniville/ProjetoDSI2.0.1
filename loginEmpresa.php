<?php
	if(isset($_REQUEST['iduser'])){
		?>
		<script type="text/javascript">
			alert("Você já está logado. Saindo de sua conta para efetuar um novo login.");
			window.location.href = "loginEmpresa.php";
		</script>
		<?php
	}
?><!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Cadastro De Empresa</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.html"></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="#">Efetuar Login</a></li>
					<li><a href="cadastroEmpresa.php">Cadastro de Empresa</a></li>
					<li><a href="quemSomos.php">Quem Somos</a></li>
				</ul>
			</nav>

			<!-- Banner -->
			<section id="banner2" class="wrapper style1">
				<div class="inner" data-tip="This is the text of the tooltip2">
					<header>
		<title</title>
						<h1>Login de Empresa</h1>
						<form action="login.php" method="POST"><p>Bem vindo ao sistema Negócio Gente Grande</p>
							</header>
							<p><h5>Por favor, digite o login de sua empresa:</h5></p>
							<input type="text" class="cadastro" id="nomeempresa" name="nomeempresa"><br>
							<p><h5>Agora por gentileza, informe sua senha:</h5></p>
							<input type="password" class="cadastro" id="senhaempresa" name="senhaempresa"><br>
							<a><input type="submit" id="botaoLogin" class="button big scrolly" value="Login"></a>
						</form>
				</div>
			</section>	
		
		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="https://www.facebook.com/jonatan.henrique.12" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
					</ul>
					<p>&copy; SOFTFELPS. All rights reserved. Design: Jonatan Henrique Freudenborg.</p>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>


	</body>
</html>