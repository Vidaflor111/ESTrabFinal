<?php

include_once '..\Persistence\Connection.php';
include_once '..\Model\Compra.php';
include_once '..\Persistence\CompraDAO.php';
include_once '..\Persistence\ClienteDAO.php';
include_once '..\Persistence\ProdutoDAO.php';

$data= $_POST['cdata'];
$CodProduto= $_POST['cproduto'];
$quantidade= $_POST['cquantidade'];
$cpf= $_POST['ccpf'];
$compra= $_POST['ccompra'];

//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();

//Criando objeto cliente
$clientedao = new ClienteDAO();
//res para verificar se o CPF do cliente esta cadastrado
$res = $clientedao->VerificarCPFcli($cpf, $conexao);

//Criando objeto pruduto
$produtodao = new ProdutoDAO();
//res1 para verificar se o código do produto esta cadastrado
$res1 = $produtodao->VerificarCodProd($CodProduto, $conexao);

//se o cliente e o produto estiverem cadastrados cadastra a compra 
if(($res->num_rows == 1)and($res1->num_rows == 1)){
	//Criando objeto compra
	$comp = new Compra($cpf, $data, $CodProduto, $quantidade, $compra);
	//Criando objeto DAO
	$compradao = new CompraDAO();
	//Salvando Compra
	$compradao->salvar($comp, $conexao);


}else{
	echo "<script>alert('O CPF do cliente e/ou código do produto que voce preencheu não esta cadastrado.');
			window.location='http://localhost/html/view/CadastrarCompra.html';</script>";
}

?>