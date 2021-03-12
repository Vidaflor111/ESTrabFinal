<?php
require_once('Compra.php');/*precisa alterar para a pasta que arquivo compra.php esta*/
	class TesteCompra extends PHPUnit\Framework\TestCase{
		
		function testeConstrutor(){
			$obj = new Compra('2133', '2021-03-04', '2', '3', '1');
			$this -> assertEquals('2133', $obj->getCliCPF(), "assert com CPF do cliente");
			$this -> assertEquals('2021-03-04', $obj->getData(), "assert com a data");
			$this -> assertEquals('2', $obj->getProd(), "assert com o cod produto");
			$this -> assertEquals('3', $obj->getQuant(), "assert com a quantidade");
			$this -> assertEquals('1', $obj->getCompra(), "assert com o cod compra");
			

		}
		
	}
?>

?>