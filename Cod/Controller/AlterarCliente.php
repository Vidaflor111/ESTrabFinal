<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ClienteDAO.php';

$cpf= $_POST['ccpf'];


$conexao = new Connection();
$conexao = $conexao -> getConnection();

$clientedao = new ClienteDAO();
$res = $clientedao->Consultar($cpf, $conexao);

if($res->num_rows == 1){
	/* FORMULARIO PARA VISUALIZAR DADOS*/
$registro = $res->fetch_assoc();
echo "<!DOCTYPE html>
<html>
<body>
	<h2>Confirme o cliente que você quer Alterar</h2>
	
<form action='..\Controller\AlterarClienteConfirma.php' method='POST'>
	<input type='text' name='cantigocpf' hidden value ='".$registro['Cpf']."'> <br>
	Novo Nome: <input type='text' name='cnome' value ='".$registro['Nome']."' > <br><br>
	Novo Email: <input type='email' name='cemail' value ='".$registro['Email']."'> <br><br>
	Nova Senha: <input type='password' name='csenha' value ='".$registro['Senha']."'> <br><br>
	Novo CPF: <input type='text' name='ccpf' value ='".$registro['Cpf']."'> <br><br>
	<input type='submit' value='Alterar'>
	<input type='reset' value='Limpar'>
</form>

</body>
</html>
";


}else{
	echo "Cliente não encontrado.";
}

?>