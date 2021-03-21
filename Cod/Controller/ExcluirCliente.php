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

if($res->num_rows == 1){
	/* FORMULARIO PARA VISUALIZAR DADOS*/
$registro = $res->fetch_assoc();
echo "<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='..\css\style.css'>
	<meta charset='UTF-8'>
	<meta name= 'viewport' content='width=device-width, initial-scake=1.0'>
	<title>Excluir Cliente</title>
</head>
<body>
	<h2 id= 'titulo'>Confirme o cliente que você quer excluir</h2>
	
<form action='..\Controller\ExcluirClienteConfirma.php' method='POST'>
	CPF <input type='text' name='ccpf' readonly value ='".$registro['Cpf']."'> <br><br>
	Nome <input type='text' disabled name='cnome' value ='".$registro['Nome']."' > <br>
	Email <input type='email' disabled name='cemail' value ='".$registro['Email']."'> <br>
	Senha <input type='password' disabled name='csenha' value ='".$registro['Senha']."'> <br>
	
	<input class='botao' type='submit' value='Confirmar'>
</form>
<a href='http://localhost/html/view/ExcluirCliente.html'>
	
<button class='botaoB'>Voltar</button></a>
</body>
</html>
";


}else{
	echo "<script>alert('Cliente não encontrado.');
	window.location='http://localhost/html/view/ExcluirCliente.html';</script>";
}

?>