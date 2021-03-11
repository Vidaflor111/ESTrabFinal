<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\CompraDAO.php';

$compra= $_POST['ccompra'];

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$compradao = new CompraDAO();
$res = $compradao->Consultar($compra, $conexao);

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
				<th>CPFcliente</th>
				<th>Data</th>
				<th>CodProduto</th>
				<th>Quantidade</th>
				<th>CodCompra</th>
			</th>";
	while($registro = $res-> fetch_assoc()){
		echo "<tr>";
		echo "<td>".$registro['CPFcliente'] ."</td>".
			 "<td>".$registro['data']."</td>".
			 "<td>".$registro['CodProduto']. "</td>".
			 "<td>".$registro['Quantidade']. "</td>".
			  "<td>".$registro['CodCompra']. "</td>";
		echo "</tr>";
	}
	echo "</table><body></html>";
}
else{
	echo "<script>alert('Compra não cadastrada!')</script>";
}



?>