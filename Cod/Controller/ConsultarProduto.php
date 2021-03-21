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

if($res->num_rows>0){
	echo "<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='..\css\style.css'>
	<meta charset='UTF-8'>
	<meta name= 'viewport' content='width=device-width, initial-scake=1.0'>
	<title>Consultar produto</title>
</head>
<body><table id='customers'>
			<tr>
				<th>NomeProd</th>
				<th>Valor</th>
				<th>CodProd</th>
			</th>";
	while($registro = $res-> fetch_assoc()){
		echo "<tr>";
		echo "<td>".$registro['NomeProd'] ."</td>".
			 "<td>".$registro['Valor']. "</td>".
			 "<td>".$registro['CodProd']. "</td>";
		echo "</tr>";
	}
	echo "</table><body></html>";
}
else{
	echo "<script>alert('Produto não encontrado.');
			window.location='http://localhost/html/view/ConsultarCompra.html';</script>";
}



?>