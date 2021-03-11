<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\CompraDAO.php';
include_once '..\Model\Compra.php';
$data= $_POST['cdata'];
$produto= $_POST['cproduto'];
$quantidade= $_POST['cquantidade'];
$cpf= $_POST['ccpf'];
$compra= $_POST['ccompra'];

$comp = new Compra($cpf, $data, $produto, $quantidade, $compra);

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$compradao = new CompraDAO();
$res = $compradao->Alterar($comp, $conexao);

if($res===TRUE){
	echo "Compra alterada com sucesso";
}else{
	echo "Erro ao alterar a compra:" . $conexao->error;
}



?>