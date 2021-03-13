<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ClienteDAO.php';

$cpf= $_POST['ccpf'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$clientedao = new ClienteDAO();
//res= resultado, para ver se o cliente foi excluido
$res = $clientedao->Excluir($cpf, $conexao);

if($res===TRUE){
	echo "Cliente excluido com sucesso";
}else{
	echo "Erro ao excluir cliente:" . $conexao->error;
}



?>