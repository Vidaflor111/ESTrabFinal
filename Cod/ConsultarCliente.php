<?php


$severname="localhost";
$username="root";
$password="";
$bd="bd";

$conn = mysqli_connect($severname,$username,$password,$bd);

if ( !$conn){
	die ("conexao falhou:".$conn->connect_error);
}
$sql= "SELECT Nome, Email, Senha, CPF FROM cliente WHERE 1";

echo "<html>
		<body>
			<h1>" . $sql.
		"</body>
		</html>" ;

if($conn->query($sql) ==TRUE){
	echo "Cliente consultado com sucesso";
}
else{
	echo "Erro no cadastramento: <br>".$conn->error;
}
?>