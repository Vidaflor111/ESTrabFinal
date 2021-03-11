<?php
class CompraDAO{
	
	function __construct(){
	}
	
	function salvar($compra, $conn){
		$sql= "INSERT INTO compra(CPFcliente, data, CodProduto, Quantidade, CodCompra) VALUES ('" . 
		$compra->getCliCPF() . "','" . 
		$compra->getData() . "','" . 
		$compra->getProd() . "','" . 
		$compra->getQuant() . "','" . 
		$compra->getCompra() . " ' " . ")";
		

		
		

		if($conn->query($sql) ==TRUE){
			echo "Cliente Salvo";
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