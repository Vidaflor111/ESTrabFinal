<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\CompraDAO.php';

$compra= $_POST['ccompra'];

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$compradao = new CompraDAO();
$res = $compradao->Excluir($compra, $conexao);

if($res===TRUE){
	echo "Compra excluida com sucesso";
}else{
	echo "Erro ao excluir compra:" . $conexao->error;
}


?>