<?php
	require_once('conexao.php');

	session_start([
    'cookie_lifetime' => 86400,
    'read_and_close'  => true,
]);

	$nomeEmpresa = $_REQUEST['nomeempresa'];
	$senhaEmpresa = $_REQUEST['senhaempresa'];
	$_SESSION['iduser'] = $nomeEmpresa;//$_SESSION com valor certo
	$_SESSION['password'] = $senhaEmpresa;//$_SESSION com valor certo

	$erro = 0;
	$sql = null;
	$aux = null;
	$data = array('iduser'=>$nomeEmpresa);
	$params = http_build_query($data);

	if($nomeEmpresa == "" || $nomeEmpresa == null){
		?><script type="text/javascript">
			alert("Favor informar o nome da empresa.");
			window.location.href = "loginEmpresa.php";
		</script><?php
		$erro = 1;
	}

	if($senhaEmpresa == "" || $senhaEmpresa == null){
		?><script type="text/javascript">
			alert("Favor informar a senha da empresa.");
		</script><?php
		$erro = 1;
	}

	if($erro == 0){
		$sql = "SELECT * FROM EMPRESA WHERE NOMEEMPRESA = UPPER('$nomeEmpresa') AND SENHAEMPRESA = UPPER('$senhaEmpresa')";
		$result = $conexao->query($sql);
		$aux = $result->num_rows;
	}


	if($aux != 0){
		?><script type="text/javascript">
			alert("Login efetuado com sucesso!.");
			window.location.href = "homepage.php?<?=$params?>";
		</script><?php
	}else{
		?><script type="text/javascript">
			alert("Não foi possível efetuar o login. Por favor tente novamente.");
			window.location.href = "loginEmpresa.php";
		</script><?php
	}



?>