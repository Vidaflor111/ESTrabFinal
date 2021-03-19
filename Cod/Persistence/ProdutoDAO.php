<?php
class ProdutoDAO{
	
	function __construct(){
	}
	
	function salvar($prod, $conn){
		$sql= "INSERT INTO produto(NomeProd, Valor, CodProd) VALUES ('" . 
		$prod->getNome() . "'," . 
		$prod->getValor() . ",'" . 
		$prod->getCod() . "' " . ")";
		

		
		

		if($conn->query($sql) ==TRUE){
			echo "Produto Cadastrado";
		}else if($conn->error == "Duplicate entry '".$prod->getCod()."' for key 'PRIMARY'"){
			echo "<h2>Código do produto já esta cadastrado.</h2> <br>".$conn->error;
		}else{
			echo "Erro no cadastramento: <br>".$conn->error;
		}
	}
	
	function Consultar($produto, $conn){
		$sql = "SELECT NomeProd, Valor, CodProd FROM produto WHERE CodProd=".$produto;
		$res = $conn->query($sql);
		return $res;
	}
	function Excluir($produto, $conn){
		$sql = "DELETE FROM produto WHERE CodProd=".$produto;
		$res = $conn->query($sql);
		return $res;
	}
	function Alterar($prod, $conn){
		$sql = "UPDATE produto SET NomeProd='".$prod->getNome() ."', Valor=" .$prod->getValor() ." WHERE CodProd=".$prod->getCod();
		$res = $conn->query($sql);
		return $res;
	}
	//verificar o produto esta cadastrado
	function VerificarCodProd($CodProduto, $conn){
		$sql = "SELECT CodProd FROM produto WHERE CodProd=".$CodProduto;
		$res = $conn->query($sql);
		return $res;
	}
}

?>