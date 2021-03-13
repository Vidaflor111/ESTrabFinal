<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ClienteDAO.php';

$cpf= $_POST['ccpf'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$clientedao = new ClienteDAO();
//res= resultado, para ver se o cliente esta cadastrado no BD
$res = $clientedao->Consultar($cpf, $conexao);

if($res->num_rows == 1){
	/* FORMULARIO PARA VISUALIZAR DADOS*/
$registro = $res->fetch_assoc();
echo "<!DOCTYPE html>
<html>
<body>
	<h2>Confirme o cliente que você quer excluir</h2>
	
<form action='..\Controller\ExcluirClienteConfirma.php' method='POST'>
	Nome: <input type='text' disabled name='cnome' value ='".$registro['Nome']."' > <br><br>
	Email: <input type='email' disabled name='cemail' value ='".$registro['Email']."'> <br><br>
	Senha: <input type='password' disabled name='csenha' value ='".$registro['Senha']."'> <br><br>
	<input type='text' name='ccpf' hidden value ='".$registro['Cpf']."'> <br><br>
	<input type='submit' value='Confirmar'>
	<input type='reset' value='Limpar'>
</form>

</body>
</html>
";


}else{
	echo "Cliente não encontrado.";
}

?>