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
	echo "<!DOCTYPE html>
	<html>
	<body>
	<h2>Email e/ou Senha incorretos</h2><br>
	
	
	
	<button type='button' onclick='location.href='..\View\login.html''>Voltar</button>
	

	</body>
	</html>
	";
}

?>