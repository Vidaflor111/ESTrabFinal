<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\CompraDAO.php';

$compra= $_POST['ccompra'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$compradao = new CompraDAO();
//res= resultado, para ver se a compra esta cadastrada no BD
$res = $compradao->Consultar($compra, $conexao);

if($res->num_rows>0){
	echo "<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='..\css\style.css'>
	<meta charset='UTF-8'>
	<meta name= 'viewport' content='width=device-width, initial-scake=1.0'>
	<title>Consultar Compra</title>
</head>
<body><table id='customers'>
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
	
	echo "</table><body>
	<a href='http://localhost/html/view/inicio.html'>
	<button class='botao'>Inicio</button></a>
	
	<a href='http://localhost/html/view/ConsultarCompra.html'>
	<button class='botaoB'>Voltar</button></a>
	</html>";
}
else{
	echo "<script>alert('Compra não encontrada.');
			window.location='http://localhost/html/view/ConsultarCompra.html';</script>";
}



?>