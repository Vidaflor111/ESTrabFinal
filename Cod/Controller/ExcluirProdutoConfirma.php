<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ProdutoDAO.php';

$produto= $_POST['cprod'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$produtodao = new ProdutoDAO();
//res= resultado, para ver se o produto foi excluido
$res = $produtodao->Excluir($produto, $conexao);

if($res===TRUE){
	echo "Produto excluido com sucesso";
}else{
	echo "Erro ao excluir produto:" . $conexao->error;
}



?>