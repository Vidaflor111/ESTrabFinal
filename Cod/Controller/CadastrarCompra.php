<?php

include_once '..\Persistence\Connection.php';
include_once '..\Model\Compra.php';
include_once '..\Persistence\CompraDAO.php';

$data= $_POST['cdata'];
$produto= $_POST['cproduto'];
$quantidade= $_POST['cquantidade'];
$cpf= $_POST['ccpf'];
$compra= $_POST['ccompra'];
//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto compra
$comp = new Compra($cpf, $data, $produto, $quantidade, $compra);
//Criando objeto DAO
$compradao = new CompraDAO();
//Salvando Compra
$compradao->salvar($comp, $conexao);



?>