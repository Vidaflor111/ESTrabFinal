<?php
require_once('Cliente.php');/*precisa alterar para a pasta que arquivo cliente.php esta*/
	class TesteCliente extends PHPUnit\Framework\TestCase{
		
		function testeConstrutor(){
			$obj = new Cliente('vidaflor', 'vidaflor@gmail.com', 'vida', '1234');
			$this -> assertEquals('vidaflor', $obj->getNome(), "assert com nome");
			$this -> assertEquals('vidaflor@gmail.com', $obj->getEmail(), "assert com email");
			$this -> assertEquals('vida', $obj->getSenha(), "assert com senha");
			$this -> assertEquals('1234', $obj->getCPF(), "assert com CPF");
			

		}
		
	}
?>