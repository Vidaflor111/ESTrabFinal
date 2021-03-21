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
	echo "<script>alert('Produto excluido com sucesso.');
			window.location='http://localhost/html/view/Inicio.html';</script>";
}else{
	echo "Erro ao excluir produto:" . $conexao->error;
}



?>