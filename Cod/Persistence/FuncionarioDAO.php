<?php
class FuncionarioDAO{
	
	function __construct(){
	}
	
	function salvar($funcionario, $conn){
		$sql= "INSERT INTO funcionario(Nome, Email, Senha, cpf) VALUES ('" . 
		$funcionario->getNome() . "','" . 
		$funcionario->getEmail() . "','" . 
		$funcionario->getSenha() . "','" . 
		$funcionario->getCPF() . "' " . ")";
		

		
		

		if($conn->query($sql) ==TRUE){
			echo "Funcionario Cadastrado";
		}else if($conn->error == "Duplicate entry '".$funcionario->getEmail()."' for key 'Email'"){
			echo "<h2>O E-mail já esta cadastrado.</h2> <br>".$conn->error;
		}else if($conn->error == "Duplicate entry '".$funcionario->getCPF()."' for key 'PRIMARY'"){
			echo "<h2>O CPF já esta cadastrado.</h2> <br>".$conn->error;
		}else{
			echo "Erro no cadastramento: <br>".$conn->error;
		}
	}
	
	function verificar($email, $senha, $conn) {
		$sql = "SELECT Senha FROM funcionario WHERE Email ='$email'";;
		
		$result = $conn->query($sql);
		
		
		if (mysqli_num_rows($result)==1) {
			$row = $result->fetch_assoc();
			$senhacada = $row["Senha"];
			
			if ($senhacada == $senha) {
				return True;
			}
			
		}
		
		return False;
	}
	
	function Consultar($cpf, $conn){
		$sql = "SELECT Nome, Email, Senha, Cpf FROM funcionario WHERE cpf=".$cpf;
		$res = $conn->query($sql);
		return $res;
	}
	function Excluir($cpf, $conn){
		$sql = "DELETE FROM funcionario WHERE cpf=".$cpf;
		$res = $conn->query($sql);
		return $res;
	}
	function Alterar($c, $conn){
		$sql = "UPDATE funcionario SET Nome='".$c->getNome() ."', Email='" .$c->getEmail() ."', Senha='".$c->getSenha() . "', CPF='".$c->getCPF() . "' WHERE cpf=".$c->cpfAntigo();
		$res = $conn->query($sql);
		return $res;
	}

}

?>