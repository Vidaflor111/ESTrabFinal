<?php
$newnome= $_POST['cnovonome'];
$newemail= $_POST['cnovoemail'];
$newsenha= $_POST['cnovosenha'];
$newcpf= $_POST['cnovocpf'];

echo "<html>
		<body>
			<h1>" . $newnome." ".$newemail." ".$newsenha." ".$newcpf.
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
$sql= "UPDATE cliente SET Nome='$newnome',Email='$newemail',Senha='$newsenha',CPF='$newcpf' WHERE 1";

if($conn->query($sql) ==TRUE){
	echo "Cliente alterado com sucesso";
}
else{
	echo "Erro no cadastramento: <br>".$conn->error;
}
?>