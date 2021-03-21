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
	<title>Excluir Produto</title>
</head>
<body>
	<h2 id= 'titulo'>Confirme o Produto que você quer excluir</h2>
	
<form action='..\Controller\ExcluirProdutoConfirma.php' method='POST'>
	Nome <input type='text' name='cnome' value ='".$registro['NomeProd']."' > <br><br>
	Valor <input type='decimal' name='cvalor' value =".$registro['Valor']."> <br><br>
	<input type='text' name='cprod' hidden value ='".$registro['CodProd']."'> <br>
	<input class='botao' type='submit' value='Confirmar'>
</form>
<a href='http://localhost/html/view/ExcluirProduto.html'>
	
<button class='botaoB'>Voltar</button></a>
</body>
</html>
";


}else{
	echo "<script>alert('Produto não encontrado.');
	window.location='http://localhost/html/view/ExcluirProduto.html';</script>";
}

?>