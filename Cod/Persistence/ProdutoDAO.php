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
			echo "<script>alert('Produto cadastrado com sucesso.');
			window.location='http://localhost/html/view/Inicio.html';</script>";
		}else if($conn->error == "Duplicate entry '".$prod->getCod()."' for key 'PRIMARY'"){
			echo "<script>alert('O código já esta vinculado à outro produto.');
			window.location='http://localhost/html/View/CadastrarProduto.html';</script>".$conn->error;
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