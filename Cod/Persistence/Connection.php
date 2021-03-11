<?php
class Connection{
	private $severname="localhost";
	private $username="root";
	private $password="";
	private $bd="bd";
	private $conn=null;
	
	function __construct(){}
	
	function getConnection(){
		if($this->conn == null){
			$this -> conn = mysqli_connect($this -> severname,$this -> username,$this -> password,$this -> bd);
		}
		
		if ( !$this -> conn){
			die ("conexao falhou:".$conn->connect_error);
		}
		return $this -> conn;
	}
}

?>