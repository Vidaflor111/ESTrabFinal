<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\CompraDAO.php';

$compra= $_POST['ccompra'];

//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objetoDAO
$compradao = new CompraDAO();
//res= resultado, para ver se a compra esta cadastrada no BD
$res = $compradao->Consultar($compra, $conexao);

if($res->num_rows == 1){
	/* FORMULARIO PARA VISUALIZAR DADOS*/
$registro = $res->fetch_assoc();
echo "<!DOCTYPE html>
<html>
<body>
	<h2>Confirme a compra que você quer Alterar</h2>
	
<form action='..\Controller\AlterarCompraConfirma.php' method='POST'>
	Novo CPF Cliente: <input type='text' name='ccpf' value ='".$registro['CPFcliente']."' > <br><br>
	Nova Data: <input type='date' name='cdata' value ='".$registro['data']."'> <br><br>
	Novo Código do produto: <input type='text' name='cproduto' value ='".$registro['CodProduto']."'> <br><br>
	Nova quantidade: <input type='text' name='cquantidade' value ='".$registro['Quantidade']."' > <br><br>
	<input type='text' hidden name='ccompra' value ='".$registro['CodCompra']."'> <br><br>
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