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
<style>
table {
	font-family: arial, sans-serif;
	border-collapse: collapse;
	width:100%;
}
	
td, th{
	border: 1px solid #dddddd;
	text-align: 8px;
	padding: 8px;
}
tr:nth_child(){
	backgroud-color:#dddddd;
}
</style>
</head>
<body><table>
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
	echo "<script>alert('Produto não cadastrado!')</script>";
}



?>