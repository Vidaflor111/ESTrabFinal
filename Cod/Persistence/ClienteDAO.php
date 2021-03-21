<?php
class ClienteDAO{
	
	function __construct(){
	}
	
	function salvar($cliente, $conn){
		$sql= "INSERT INTO cliente(Nome, Email, Senha, cpf) VALUES ('" . 
		$cliente->getNome() . "','" . 
		$cliente->getEmail() . "','" . 
		$cliente->getSenha() . "','" . 
		$cliente->getCPF() . "' " . ")";
		

		
		

		if($conn->query($sql) ==TRUE){
			echo "<script>alert('Cliente cadastrado com sucesso.');
			window.location='http://localhost/html/view/Inicio.html';</script>";
		}else if($conn->error == "Duplicate entry '".$cliente->getEmail()."' for key 'Email'"){
			echo "<script>alert('O e-mail já esta vinculado à outra conta.');
			window.location='http://localhost/html/View/CadastrarCliente.html';</script>";
		}else if($conn->error == "Duplicate entry '".$cliente->getCPF()."' for key 'PRIMARY'"){
			echo "<script>alert('O CPF já esta vinculado à outra conta.');
			window.location='http://localhost/html/View/CadastrarCliente.html';</script>";
		}else{
			echo "Erro no cadastramento: <br>".$conn->error;
		}
	}
	function Consultar($cpf, $conn){
		$sql = "SELECT Nome, Email, Senha, Cpf FROM cliente WHERE cpf=".$cpf;
		$res = $conn->query($sql);
		return $res;
	}
	function Excluir($cpf, $conn){
		$sql = "DELETE FROM cliente WHERE cpf=".$cpf;
		$res = $conn->query($sql);
		return $res;
	}
	function Alterar($c, $conn, $cpfAntigo){
		$sql = "UPDATE cliente SET Nome='".$c->getNome() ."', Email='" .$c->getEmail() ."', Senha='".$c->getSenha() . "', CPF='".$c->getCPF() . "' WHERE cpf=".$cpfAntigo;
		$res = $conn->query($sql);
		return $res;
	}
	//verificar o cliente esta cadastrado
	function VerificarCPFcli($cpf, $conn){
		$sql = "SELECT Cpf FROM cliente WHERE cpf=".$cpf;
		$res = $conn->query($sql);
		return $res;
	}

}

?>