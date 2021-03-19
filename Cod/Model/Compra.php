<?php
class Compra{
	
	private $cliCPF;
	private $data;
	private $produto;
	private $quantidade;
	private $CodCompra;
	

	
	function __construct($vcliCPF, $vdata, $vproduto, $vquantidade, $vCodCompra){
		$this -> cliCPF = $vcliCPF;
		$this -> data = $vdata;
		$this -> produto = $vproduto;
		$this -> quantidade = $vquantidade;
		$this -> CodCompra = $vCodCompra;

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
	function getCodCompra(){
		return $this -> CodCompra;
	}

}

?>