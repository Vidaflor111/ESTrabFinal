<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ProdutoDAO.php';

$produto= $_POST['cprod'];



$conexao = new Connection();
$conexao = $conexao -> getConnection();

$produtodao = new ProdutoDAO();
$res = $produtodao->Consultar($produto, $conexao);

if($res->num_rows == 1){
	/* FORMULARIO PARA VISUALIZAR DADOS*/
$registro = $res->fetch_assoc();
echo "<!DOCTYPE html>
<html>
<body>
	<h2>Confirme o produto que você quer Alterar</h2>
	
<form action='..\Controller\AlterarProdutoConfirma.php' method='POST'>
	<input type='text' name='cprod' hidden value ='".$registro['CodProd']."'> <br>
	Novo Nome: <input type='text' name='cnome' value ='".$registro['NomeProd']."' > <br><br>
	Novo Valor: <input type='decimal' name='cvalor' value =".$registro['Valor']."> <br><br>
	<input type='submit' value='Alterar'>
	<input type='reset' value='Limpar'>
</form>

</body>
</html>
";


}else{
	echo "Produto não encontrado.";
}

?>