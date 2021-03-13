<?php

include_once '..\Persistence\Connection.php';
include_once '..\Persistence\ProdutoDAO.php';

$produto= $_POST['cprod'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto DAO
$produtodao = new ProdutoDAO();
//res= resultado, para ver se o produto esta cadastrado no BD
$res = $produtodao->Consultar($produto, $conexao);

if($res->num_rows == 1){
	/* FORMULARIO PARA VISUALIZAR DADOS*/
$registro = $res->fetch_assoc();
echo "<!DOCTYPE html>
<html>
<body>
	<h2>Confirme o Produto que você quer excluir</h2>
	
<form action='..\Controller\ExcluirProdutoConfirma.php' method='POST'>
	Novo Nome: <input type='text' name='cnome' value ='".$registro['NomeProd']."' > <br><br>
	Novo Valor: <input type='decimal' name='cvalor' value =".$registro['Valor']."> <br><br>
	<input type='text' name='cprod' hidden value ='".$registro['CodProd']."'> <br>
	<input type='submit' value='Confirmar'>
	<input type='reset' value='Limpar'>
</form>

</body>
</html>
";


}else{
	echo "Produto não encontrado.";
}

?>