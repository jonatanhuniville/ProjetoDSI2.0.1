<?php
	
	require_once('conexao.php');

	$nomeEmpresa = $_REQUEST['nomeempresa'];
	$cnpjEmpresa = $_REQUEST['cnpjempresa'];
	$senhaEmpresa = $_REQUEST['senhaempresa'];
	$ramoEmpresa = $_REQUEST['ramoempresa'];
	$control = true;
	$sql;

	if($nomeEmpresa == "" || $nomeEmpresa == null){
		echo "Favor informar o nome da empresa.</br></br>";
		$sql = false;
		header('location:erro.php');
	}else if($cnpjEmpresa == "" || $cnpjEmpresa == null){
		echo "Favor informar o CNPJ da empresa.</br></br>";
		$sql = false;
		header('location:erro.php');
	}else if($ramoEmpresa == "" || $ramoEmpresa == "null"){
		echo "Favor informar o ramo da empresa.</br></br>";
		$sql = false;
		header('location:erro.php');
	}else if($senhaEmpresa == "" || $senhaEmpresa == "null"){
		echo "Favor informar a senha de sua empresa.</br></br>";
		$sql = false;
		header('location:erro.php');
	}else{
		$sql = "INSERT INTO EMPRESA (NOMEEMPRESA, CNPJEMPRESA, RAMOEMPRESA) VALUES ('$nomeEmpresa','$cnpjEmpresa', '$ramoEmpresa')";
	}

	if($sql){
		echo "Usuário incluído com sucesso!";
	}else{
		echo "Erro: Não foi possível incluir o cadastro.</br>";	
	}

	$conexao->close();

?>
