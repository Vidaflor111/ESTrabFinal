<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ClienteDAO.php';

$cpf= $_POST['ccpf'];

//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();

//Criando objeto DAO
$clientedao = new ClienteDAO();


$res = $clientedao->Consultar($cpf, $conexao);//res= resultado, para ver se o cliente esta cadastrado no BD

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
	<h2 id= 'titulo'>Confirme o cliente que você quer alterar</h2>
	
<form class='campo' action='..\Controller\AlterarClienteConfirma.php' method='POST'>
	CPF Antigo <input type='text' name='cantigocpf' readonly value ='".$registro['Cpf']."'> <br>
	Novo Nome <input type='text' name='cnome' value ='".$registro['Nome']."' > <br><br>
	Novo Email <input type='email' name='cemail' value ='".$registro['Email']."'> <br><br>
	Nova Senha <input type='password' name='csenha' value ='".$registro['Senha']."'> <br><br>
	Novo CPF <input type='text' name='ccpf' value ='".$registro['Cpf']."'> <br><br>
	<input class='botao' type='submit' value='Alterar'>
	
</form>
	<a href='http://localhost/html/view/AlterarCliente.html'>
	
	<button class='botaoB'>Voltar</button></a>
</body>
</html>
";


}else{
	echo "<script>alert('Cliente não encontrado.');
			window.location='http://localhost/html/view/AlterarCliente.html';</script>";
}

?>