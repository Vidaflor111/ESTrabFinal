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
<head>
	<link rel='stylesheet' type='text/css' href='..\css\style.css'>
	<meta charset='UTF-8'>
	<meta name= 'viewport' content='width=device-width, initial-scake=1.0'>
	<title>Alterar Cliente</title>
</head>
<body>
	<h2 id= 'titulo'>Confirme a compra que você quer Alterar</h2>
	
<form class='campo' action='..\Controller\AlterarCompraConfirma.php' method='POST'>
	Código da compra<input type='text' readonly name='ccompra' value ='".$registro['CodCompra']."'> <br><br>
	Novo CPF Cliente <input type='text' name='ccpf' value ='".$registro['CPFcliente']."' > <br>
	Novo Código do produto: <input type='text' name='cproduto' value ='".$registro['CodProduto']."'> <br>
	Nova quantidade <input type='text' name='cquantidade' value ='".$registro['Quantidade']."' > <br>
	Nova Data <input type='date' name='cdata' value ='".$registro['data']."'> <br>
	
	<input class='botao' type='submit' value='Alterar'>
	
</form>
<a href='http://localhost/html/view/AlterarCompra.html'>
	
	<button class='botaoB'>Voltar</button></a>
</body>
</html>
";


}else{
	echo "<script>alert('Compra não encontrada.');
			window.location='http://localhost/html/view/AlterarCompra.html';</script>";
}

?>