<?php
require_once('Produto.php');/*precisa alterar para a pasta que arquivo Produto.php esta*/
	class TesteProduto extends PHPUnit\Framework\TestCase{
		
		function testeConstrutor(){
			$obj = new Produto('blusa', 3333.0, '1');
			$this -> assertEquals('blusa', $obj->getNome(), "assert com nome");
			$this -> assertEquals(3333.0, $obj->getValor(), "assert com Valor");
			$this -> assertEquals('1', $obj->getCod(), "assert com codigo");


		}
		
	}
?>