<?php
	require_once('conexao.php');

	$nomeEmpresa = $_REQUEST['nomeempresa'];
	$senhaEmpresa = $_REQUEST['senhaempresa'];
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
		$sql = "SELECT * FROM EMPRESA WHERE NMEMPRESA = UPPER('$nomeEmpresa') AND SENHAEMPRESA = UPPER('$senhaEmpresa')";
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