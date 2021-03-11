<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ProdutoDAO.php';

$produto= $_POST['cprod'];

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$produtodao = new ProdutoDAO();
$res = $produtodao->Excluir($produto, $conexao);

if($res===TRUE){
	echo "Produto excluido com sucesso";
}else{
	echo "Erro ao excluir produto:" . $conexao->error;
}



?>