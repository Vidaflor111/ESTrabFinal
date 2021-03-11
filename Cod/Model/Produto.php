<?php
class Produto{
	
	private $name;
	private $valor;
	private $cod;

	
	function __construct($vnome, $vvalor, $vcod){
		$this -> nome = $vnome;
		$this -> valor = $vvalor;
		$this -> codigo = $vcod;


	}
	
	function getNome(){
		return $this -> nome;
	}
	function getValor(){
		return $this -> valor;
	}
	function getCod(){
		return $this -> codigo;
	}


}

?>