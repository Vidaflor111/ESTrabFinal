<?php

include_once '..\Persistence\Connection.php';
include_once '..\Model\Cliente.php';
include_once '..\Persistence\ClienteDAO.php';

$nome= $_POST['cnome'];
$email= $_POST['cemail'];
$senha= $_POST['csenha'];
$cpf= $_POST['ccpf'];

//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto cliente
$c = new Cliente($nome, $email, $senha, $cpf);
//Criando objeto DAO
$clientedao = new ClienteDAO();
//Salvando cliente
$clientedao->salvar($c, $conexao);



?>