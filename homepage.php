<?php
	require_once("validateLoggedUser.php");
	
	$validation = new validateLoggedUser();
	
	$user = isset($_REQUEST['iduser']) ? $validation->validateUser($_REQUEST['iduser']): $validation->validateUser();

	if(!isset($user)){
		?>
		<script type="text/javascript">
			alert("Por favor, efetuar login!");
			window.location.href = "loginEmpresa.php";
		</script>
		<?php
	}
?>
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
				<a><?php echo $user;?></a>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="quemSomos.php">Quem Somos</a></li>
					<li><a href="index.php">Deslogar</a></li>
				</ul>
			</nav>

			<!-- Banner -->
			<section id="banner2" class="wrapper style1">
				<div class="inner" data-tip="This is the text of the tooltip2">
					<header>
		<title</title>
						<h1>Login de Empresa</h1>
						<form action="login.php" method="POST"><p>Bem vindo ao sistema Negócio Gente Grande</p>
							
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