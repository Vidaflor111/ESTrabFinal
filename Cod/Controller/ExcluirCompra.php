<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\CompraDAO.php';

$compra= $_POST['ccompra'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$compradao = new CompraDAO();
//res= resultado, para ver se a compra esta cadastrada no BD
$res = $compradao->Consultar($compra, $conexao);

if($res->num_rows == 1){
	/* FORMULARIO PARA VISUALIZAR DADOS*/
$registro = $res->fetch_assoc();
echo "<!DOCTYPE html>
<html>
<body>
	<h2>Confirme a compra que você quer excluir</h2>
	
<form action='..\Controller\ExcluirCompraConfirma.php' method='POST'>
	CPF Cliente: <input type='text' disabled name='ccpf' value ='".$registro['CPFcliente']."' > <br><br>
	Data: <input type='date' disabled name='cdata' value ='".$registro['data']."'> <br><br>
	Codigo do produto: <input type='text' disabled name='cproduto' value ='".$registro['CodProduto']."'> <br><br>
	Quantidade: <input type='text' disabled name='cquantidade' value ='".$registro['Quantidade']."'> <br><br>
	<input type='text' name='ccompra' hidden value ='".$registro['CodCompra']."'> <br><br>
	

	<input type='submit' value='Confirmar'>
	<button type='button' onclick='location.href='inicio.html''>Voltar</button>
</form>

</body>
</html>
";


}else{
	echo "Cliente não encontrado.";
}

?>