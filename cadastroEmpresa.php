<!DOCTYPE HTML>
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
					<li><a href="cadastroEmpresa.php">Cadastro de Empresa</a></li>
					<li><a href="quemSomos.php">Quem Somos</a></li>
				</ul>
			</nav>

			<!-- Banner -->
			<section id="banner2" class="wrapper style1">
				<div class="inner" data-tip="This is the text of the tooltip2">
					<header>
		<title</title>
						<h1>Cadastre sua Empresa</h1>
						<form action="cadastro.php" method="POST"><p>Bem vindo ao cadastro de empresas do Negócio Gente Grande</p>
							</header>
							<p><h5>Por favor, digite o nome de sua empresa:</h5></p>
							<input type="text" class="cadastro" id="nomeempresa" name="nomeempresa"><br>
							<p><h5>Agora por gentileza, informe o CNPJ:</h5></p>
							<input type="text" pattern="\(\d{2}\)\d{4}-\d{4}" class="cadastro" id="cnpjempresa" name="cnpjempresa"><br>
							<p><h5>Escolha uma senha:</h5></p>
							<input type="password" class="tool" id="senhaempresa" name="senhaempresa" data-tip="Hyper Text Makeup Language" ><br>
							<p><h5>Por fim, nos diga o ramo em que atua:</h5></p>
							<select class="cadastro" id="ramoempresa" name="ramoempresa">
								<option value="null"></option>
								<option value="bebidas">Bebidas</option>
								<option value="mobiliario">Mobiliário</option>
								<option value="vestuario">Vestuário</option>
								<option value="metalurgia">Metalúrgico</option>
								<option value="mecanica">Mecânico</option>
								<option value="veiculos">Veículos</option>
								<option value="combustiveis">Combustíveis</option>
								<option value="alimenticio">Alimentício</option>
								<option value="transporte">Transportes</option>
								<option value="turismo">Turismo</option>
								<option value="saude">Saúde</option>
								<option value="educacao">Educação</option>
								<option value="lazer">Lazer</option>
							</select>
							<a><input type="submit" id="botaoCadastro" class="button big scrolly" value="Prosseguir"></a>
						</form>
				</div>
			</section>	
		
		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
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