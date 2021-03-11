<?php
class Compra{
	
	private $cliCPF;
	private $data;
	private $produto;
	private $quantidade;
	private $compra;
	

	
	function __construct($vcliCPF, $vdata, $vproduto, $vquantidade, $vcompra){
		$this -> cliCPF = $vcliCPF;
		$this -> data = $vdata;
		$this -> produto = $vproduto;
		$this -> quantidade = $vquantidade;
		$this -> compra = $vcompra;

	}
	
	function getCliCPF(){
		return $this -> cliCPF;
	}
	function getData(){
		return $this -> data;
	}
	function getProd(){
		return $this -> produto;
	}
	function getQuant(){
		return $this -> quantidade;
	}
	function getCompra(){
		return $this -> compra;
	}

}

?>