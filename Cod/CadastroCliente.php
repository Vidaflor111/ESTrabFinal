<?php
$nome= $_POST['cnome'];
$email= $_POST['cemail'];
$senha= $_POST['csenha'];

echo "<html>
		<body>
			<h1>" . $nome." ".$email." ".$senha.
		"</body>
		</html>" ;

$severname="localhost";
$username="root";
$password="";
$bd="bd";

$conn = mysqli_connect($severname,$username,$password,$bd);

if ( !$conn){
	die ("conexao falhou:".$conn->connect_error);
}
$sql= "INSERT INTO cliente(Nome, Email, Senha) VALUES ('$nome','$email','$senha')";

if($conn->query($sql) ==TRUE){
	echo "Cliente Salvo";
}
else{
	echo "Erro no cadastramento: <br>".$conn->error;
}
?>