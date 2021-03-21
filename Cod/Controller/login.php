<?php

include_once '..\persistence\connection.php';
include_once '..\persistence\FuncionarioDAO.php';

$email = $_POST['cemail'];
$senha = $_POST['csenha'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao->getConnection();
//Criando objeto DAO
$funcionarioDAO = new funcionarioDAO();
//res= resultado, para ver se o funcionario esta cadastrado no BD
$res = $funcionarioDAO->verificar($email, $senha, $conexao);

if ($res) {
	header('Location: ..\view\Inicio.html');
}
else {
	// Caso nao emite um erro
    echo "<script>alert('E-mail e/ou senha incorretos.');
			window.location='http://localhost/html/view/login.html';</script>";
}

?>