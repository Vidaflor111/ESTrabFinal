<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ClienteDAO.php';

$cpf= $_POST['ccpf'];

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$clientedao = new ClienteDAO();
$res = $clientedao->Excluir($cpf, $conexao);

if($res===TRUE){
	echo "Cliente excluido com sucesso";
}else{
	echo "Erro ao excluir cliente:" . $conexao->error;
}



?>