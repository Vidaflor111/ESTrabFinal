<?php
class ProdutoDAO{
	
	function __construct(){
	}
	
	function salvar($prod, $conn){
		$sql= "INSERT INTO produto(NomeProd, Valor, CodProd) VALUES ('" . 
		$prod->getNome() . "'," . 
		$prod->getValor() . ",'" . 
		$prod->getCod() . " ' " . ")";
		

		
		

		if($conn->query($sql) ==TRUE){
			echo "Produto Salvo";
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

}

?>