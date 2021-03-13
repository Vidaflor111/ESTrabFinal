<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ClienteDAO.php';

$cpf= $_POST['ccpf'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$clientedao = new ClienteDAO();
//res= resultado, para ver se o cliente esta cadastrado no BD
$res = $clientedao->Consultar($cpf, $conexao);

if($res->num_rows>0){
	//se estiver cadastrado consulta cliente
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
				<th>Nome</th>
				<th>Email</th>
				<th>Senha</th>
				<th>CPF</th>
			</th>";
	while($registro = $res-> fetch_assoc()){
		echo "<tr>";
		echo "<td>".$registro['Nome'] ."</td>".
			 "<td>".$registro['Email']."</td>".
			 "<td>".$registro['Senha']. "</td>".
			 "<td>".$registro['Cpf']. "</td>";
		echo "</tr>";
	}
	echo "</table><body></html>";
}
else{
	echo "<script>alert('CPF não cadastrado!')</script>";
}



?>