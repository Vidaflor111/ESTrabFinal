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
	<link rel='stylesheet' type='text/css' href='..\css\style.css'>
	<meta charset='UTF-8'>
	<meta name= 'viewport' content='width=device-width, initial-scake=1.0'>
	<title>Consultar Cliente</title>
</head>
<body><table id='customers'>
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
	echo "</table><body>
	<a href='http://localhost/html/view/inicio.html'>
	<button class='botao'>Inicio</button></a>
	
	<a href='http://localhost/html/view/ConsultarCliente.html'>
	<button class='botaoB'>Voltar</button></a>
	</html>";
}
else{
	echo "<script>alert('Cliente não encontrado.');
			window.location='http://localhost/html/view/ConsultarCliente.html';</script>";
}



?>