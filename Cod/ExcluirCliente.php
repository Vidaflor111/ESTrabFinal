<?php


$severname="localhost";
$username="root";
$password="";
$bd="bd";

$conn = mysqli_connect($severname,$username,$password,$bd);

if ( !$conn){
	die ("conexao falhou:".$conn->connect_error);
}
$sql= "DELETE FROM cliente WHERE 1";


if($conn->query($sql) ==TRUE){
	echo "Cliente Excluido com sucesso";
}
else{
	echo "Erro no cadastramento: <br>".$conn->error;
}
?>