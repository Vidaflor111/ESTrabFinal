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
<head>
	<link rel='stylesheet' type='text/css' href='..\css\style.css'>
	<meta charset='UTF-8'>
	<meta name= 'viewport' content='width=device-width, initial-scake=1.0'>
	<title>Excluir Compra</title>
</head>
<body>
	<h2 id= 'titulo'>Confirme a compra que você quer excluir</h2>
	
<form class='campo' action='..\Controller\ExcluirCompraConfirma.php' method='POST'>
	CPF Cliente <input type='text' disabled name='ccpf' value ='".$registro['CPFcliente']."' > <br><br>
	Data <input type='date' disabled name='cdata' value ='".$registro['data']."'> <br><br>
	Codigo do produto: <input type='text' disabled name='cproduto' value ='".$registro['CodProduto']."'> <br><br>
	Quantidade <input type='text' disabled name='cquantidade' value ='".$registro['Quantidade']."'> <br><br>
	<input type='text' name='ccompra' hidden value ='".$registro['CodCompra']."'> <br><br>
	

	<input class='botao' type='submit' value='Confirmar'>
</form>
<a href='http://localhost/html/view/ExcluirCompra.html'>
	
<button class='botaoB'>Voltar</button></a>
</body>
</html>
";


}else{
	echo "<script>alert('Compra não encontrada.');
	window.location='http://localhost/html/view/ExcluirCompra.html';</script>";
}

?>