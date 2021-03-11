<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ProdutoDAO.php';
include_once '..\Model\Produto.php';

$nome= $_POST['cnome'];
$valor= $_POST['cvalor'];
$produto= $_POST['cprod'];


$prod = new Produto($nome, $valor, $produto);

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$produtodao = new ProdutoDAO();
$res = $produtodao->alterar($prod, $conexao);

if($res===TRUE){
	echo "Produto alterado com sucesso";
}else{
	echo "Erro ao alterar o produto:" . $conexao->error;
}



?>