<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ClienteDAO.php';
include_once '..\Model\Cliente.php';

$nome= $_POST['cnome'];
$email= $_POST['cemail'];
$senha= $_POST['csenha'];
$cpf= $_POST['ccpf'];
$cpfAntigo= $_POST['cantigocpf'];

//Criando objeto cliente
$c = new Cliente($nome, $email, $senha, $cpf);

//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();

//Criando objeto DAO
$clientedao = new ClienteDAO();
//res= resultado, para ver se o o cliente foi alterado
$res = $clientedao->Alterar($c, $conexao, $cpfAntigo);

if($res===TRUE){
	echo "Cliente alterado com sucesso";
}else{
	echo "Erro ao alterar cliente:" . $conexao->error;
}



?>