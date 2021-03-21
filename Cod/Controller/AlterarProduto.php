<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ProdutoDAO.php';

$produto= $_POST['cprod'];



//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$produtodao = new ProdutoDAO();
//res= resultado, para ver se o produto esta cadastrado no BD
$res = $produtodao->Consultar($produto, $conexao);

if($res->num_rows == 1){
	/* FORMULARIO PARA VISUALIZAR DADOS*/
$registro = $res->fetch_assoc();
echo "<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='..\css\style.css'>
	<meta charset='UTF-8'>
	<meta name= 'viewport' content='width=device-width, initial-scake=1.0'>
	<title>Alterar Cliente</title>
</head>
<body>
	<h2 id= 'titulo'>Confirme o produto que você quer Alterar</h2>
	
<form class='campo' action='..\Controller\AlterarProdutoConfirma.php' method='POST'>
	Código produto <input type='text' name='cprod' readonly value ='".$registro['CodProd']."'> <br><br>
	Novo Nome <input type='text' name='cnome' value ='".$registro['NomeProd']."' > <br>
	Novo Valor <input type='decimal' name='cvalor' value =".$registro['Valor']."> <br>
	<input class='botao' type='submit' value='Alterar'>
	
</form>
<a href='http://localhost/html/view/AlterarProduto.html'>
	
<button class='botaoB'>Voltar</button></a>
</body>
</html>
";


}else{
	echo "<script>alert('Produto não encontrado.');
	window.location='http://localhost/html/view/AlterarProduto.html';</script>";
}

?>