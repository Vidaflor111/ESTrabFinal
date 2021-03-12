<?php

include_once '..\persistence\connection.php';
include_once '..\persistence\FuncionarioDAO.php';

$email = $_POST['cemail'];
$senha = $_POST['csenha'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$funcionarioDAO = new funcionarioDAO();

$res = $funcionarioDAO->verificar($email, $senha, $conexao);

if ($res) {
	header('Location: ..\view\Inicio.html');
}
else {
	// Caso nao emite um erro
	echo "<h1>Email e/ou Senha incorretos!</h1><br><form action='retornar.php' method='post'><br><button type='submit' value='login' name='bt'>Voltar</button>";
}

?>