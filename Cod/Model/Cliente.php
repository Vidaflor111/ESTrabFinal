<?php
class Cliente{
	
	private $name;
	private $email;
	private $senha;
	private $cpf;

	
	function __construct($vnome, $vemail, $vsenha, $vcpf){
		$this -> nome = $vnome;
		$this -> email = $vemail;
		$this -> senha = $vsenha;
		$this -> cpf = $vcpf;

	}
	
	function getNome(){
		return $this -> nome;
	}
	function getEmail(){
		return $this -> email;
	}
	function getSenha(){
		return $this -> senha;
	}
	function getCPF(){
		return $this -> cpf;
	}

}

?>