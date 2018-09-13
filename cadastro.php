<?php
	
	require_once('conexao.php');

	$nomeEmpresa = $_REQUEST['nomeempresa'];
	$cnpjEmpresa = $_REQUEST['cnpjempresa'];
	$senhaEmpresa = $_REQUEST['senhaempresa'];
	$ramoEmpresa = $_REQUEST['ramoempresa'];
	$erro = 0;
	$sql = null;

	if($nomeEmpresa == "" || $nomeEmpresa == null){
		?><script type="text/javascript">
			alert("Favor informar o nome da empresa.")
			window.location.href = "cadastroEmpresa.php";
		</script><?php'
		$erro = 1;
	}

	if($cnpjEmpresa == "" || $cnpjEmpresa == null){
		?><script type="text/javascript">
			alert("Favor informar o CNPJ da empresa.")
			window.location.href = "cadastroEmpresa.php";
		</script><?php
		$erro = 1;
	}

	if($ramoEmpresa == "" || $ramoEmpresa == "null"){
		?><script type="text/javascript">
			alert("Favor informar o ramo da empresa.")
			window.location.href = "cadastroEmpresa.php";
		</script><?php
		$erro = 1;
	}

	if($senhaEmpresa == "" || $senhaEmpresa == null){
		?><script type="text/javascript">
			alert("Favor informar a senha de sua empresa.")
			window.location.href = "cadastroEmpresa.php";
		</script><?php
		$erro = 1;
	}

	if($erro == 0){
		$sql = "INSERT INTO EMPRESA (NOMEEMPRESA, CNPJEMPRESA, SENHAEMPRESA, RAMOEMPRESA) VALUES (UPPER('$nomeEmpresa'),'$cnpjEmpresa', UPPER('$senhaEmpresa'), UPPER('$ramoEmpresa'))";
		$conexao->query($sql);
	}
	
	$aux = mysqli_error_list($conexao);

	if(empty($aux)){
		?><script type="text/javascript">
			alert("Usuário incluído com sucesso!.")
			window.location.href = "cadastroSuccesso.php";
		</script><?php
	}else{
		error_log(print_r($aux));
		?><script type="text/javascript">
			alert("Não foi possível efetuar o cadastro. Por favor tente novamente.")
			alert(teste);
			window.location.href = "#";
		</script><?php
	}

	$conexao->close();
?>
