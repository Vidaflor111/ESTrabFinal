<?php

include_once '..\Persistence\Connection.php';
include_once '..\Model\Funcionario.php';
include_once '..\Persistence\FuncionarioDAO.php';

$nome= $_POST['cnome'];
$email= $_POST['cemail'];
$senha= $_POST['csenha'];
$cpf= $_POST['ccpf'];

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$funcionario = new Funcionario($nome, $email, $senha, $cpf);

$funcionariodao = new FuncionarioDAO();
$funcionariodao->salvar($funcionario, $conexao);



?>