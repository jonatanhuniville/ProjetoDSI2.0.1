<?php
	require_once('conexao.php');

	$nomeEmpresa = $_REQUEST['nomeempresa'];
	$senhaEmpresa = $REQUEST['senhaempresa'];
	$erro = 0;
	$sql = null;

	if($nomeEmpresa == "" || $nomeEmpresa == null){
		?><script type="text/javascript">
			alert("Favor informar o nome da empresa.")
		</script><?php
		$erro = 1;
	}

	if($senhaEmpresa == "" || $senhaEmpresa == null){
		?><script type="text/javascript">
			alert("Favor informar a senha de sua empresa.")
		</script><?php
		$erro = 1;
	}

	if($erro == 0){
		$sql = "SELECT * FROM EMPRESA WHERE NMEMPRESA = UPPER($nomeEmpresa) AND SENHAEMPRESA = UPPER($senhaEmpresa)";
		$conexao->query($sql);
	}

	$aux = mysqli_error_list($conexao);

	if(empty($aux)){
		?><script type="text/javascript">
			alert("Usuário incluído com sucesso!.")
		</script><?php
	}else{
		?><script type="text/javascript">
			alert("Não foi possível efetuar o cadastro. Por favor tente novamente..")
		</script><?php
	}



?>