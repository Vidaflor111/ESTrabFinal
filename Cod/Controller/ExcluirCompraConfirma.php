<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\CompraDAO.php';

$compra= $_POST['ccompra'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$compradao = new CompraDAO();
//res= resultado, para ver se a compra foi excluida
$res = $compradao->Excluir($compra, $conexao);

if($res===TRUE){
	echo "Compra excluida com sucesso";
}else{
	echo "Erro ao excluir compra:" . $conexao->error;
}


?>