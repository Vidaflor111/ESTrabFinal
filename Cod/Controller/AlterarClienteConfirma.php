<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ClienteDAO.php';
include_once '..\Model\Cliente.php';
$nome= $_POST['cnome'];
$email= $_POST['cemail'];
$senha= $_POST['csenha'];
$cpf= $_POST['ccpf'];
$cpfAntigo= $_POST['cantigocpf'];


$c = new Cliente($nome, $email, $senha, $cpf, $cpfAntigo);

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$clientedao = new ClienteDAO();
$res = $clientedao->Alterar($c, $conexao);

if($res===TRUE){
	echo "Cliente alterado com sucesso";
}else{
	echo "Erro ao alterar cliente:" . $conexao->error;
}



?>