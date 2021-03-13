<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\CompraDAO.php';
include_once '..\Model\Compra.php';
$data= $_POST['cdata'];
$produto= $_POST['cproduto'];
$quantidade= $_POST['cquantidade'];
$cpf= $_POST['ccpf'];
$compra= $_POST['ccompra'];
//Criando objeto compra
$comp = new Compra($cpf, $data, $produto, $quantidade, $compra);
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$compradao = new CompraDAO();
//res= resultado, para ver se a compra foi alterada
$res = $compradao->Alterar($comp, $conexao);

if($res===TRUE){
	echo "Compra alterada com sucesso";
}else{
	echo "Erro ao alterar a compra:" . $conexao->error;
}



?>