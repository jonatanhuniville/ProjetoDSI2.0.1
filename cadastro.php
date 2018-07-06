<?php
	
	require_once('conexao.php');

	$nomeEmpresa = $_REQUEST['nomeempresa'];
	$cnpjEmpresa = $_REQUEST['cnpjempresa'];
	$ramoEmpresa = $_REQUEST['ramoempresa'];

	$sql = "INSERT INTO EMPRESA (NOMEEMPRESA, CNPJEMPRESA, RAMOEMPRESA) VALUES ('$nomeEmpresa','$cnpjEmpresa', '$ramoEmpresa')";

	if($conexao->query($sql) === TRUE){
		echo "Usuário incluído com sucesso!";
		phpinfo(); 
	}else{
		echo "Erro: " .$sql."</br>".$conexao->error;
	}

	$conexao->close();

?>