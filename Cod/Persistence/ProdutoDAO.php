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
	function Consultar($compra, $conn){
		$sql = "SELECT CPFcliente, data, CodProduto, Quantidade, CodCompra FROM compra WHERE CodCompra=".$compra;
		$res = $conn->query($sql);
		return $res;
	}
	function Excluir($compra, $conn){
		$sql = "DELETE FROM compra WHERE CodCompra=".$compra;
		$res = $conn->query($sql);
		return $res;
	}
	function Alterar($comp, $conn){
		$sql = "UPDATE compra SET CPFcliente='".$comp->getCliCPF() ."', Data='" .$comp->getData() ."', CodProduto='".$comp->getProd() . "', Quantidade='".$comp->getQuant() . "' WHERE CodCompra=".$comp->getCompra();
		$res = $conn->query($sql);
		return $res;
	}

}

?>