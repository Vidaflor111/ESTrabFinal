<?php

include_once '..\Persistence\Connection.php';
include_once '..\Model\Cliente.php';
include_once '..\Persistence\ClienteDAO.php';

$nome= $_POST['cnome'];
$email= $_POST['cemail'];
$senha= $_POST['csenha'];
$cpf= $_POST['ccpf'];

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$c = new Cliente($nome, $email, $senha, $cpf);

$clientedao = new ClienteDAO();
$clientedao->salvar($c, $conexao);



?>