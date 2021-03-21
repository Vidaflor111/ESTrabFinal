<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ProdutoDAO.php';
include_once '..\Model\Produto.php';

$nome= $_POST['cnome'];
$valor= $_POST['cvalor'];
$produto= $_POST['cprod'];

//Criando objeto produto
$prod = new Produto($nome, $valor, $produto);
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();

$produtodao = new ProdutoDAO();
//res= resultado, para ver se o o produto foi alterado
$res = $produtodao->alterar($prod, $conexao);

if($res===TRUE){
	echo "<script>alert('Produto alterado com sucesso.');
			window.location='http://localhost/html/view/Inicio.html';</script>";
}else{
	echo "Erro ao alterar o produto:" . $conexao->error;
}



?>