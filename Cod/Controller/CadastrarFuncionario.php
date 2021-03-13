<?php

include_once '..\Persistence\Connection.php';
include_once '..\Model\Funcionario.php';
include_once '..\Persistence\FuncionarioDAO.php';

$nome= $_POST['cnome'];
$email= $_POST['cemail'];
$senha= $_POST['csenha'];
$cpf= $_POST['ccpf'];

//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto funcionario
$funcionario = new Funcionario($nome, $email, $senha, $cpf);
//Criando objeto DAO
$funcionariodao = new FuncionarioDAO();
//Salvando funcionario
$funcionariodao->salvar($funcionario, $conexao);



?>