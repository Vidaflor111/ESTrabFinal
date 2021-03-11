<?php

include_once '..\Persistence\Connection.php';
include_once '..\Model\Compra.php';
include_once '..\Persistence\CompraDAO.php';

$data= $_POST['cdata'];
$produto= $_POST['cproduto'];
$quantidade= $_POST['cquantidade'];
$cpf= $_POST['ccpf'];
$compra= $_POST['ccompra'];

$conexao = new Connection();
$conexao = $conexao -> getConnection();

$comp = new Compra($cpf, $data, $produto, $quantidade, $compra);

$compradao = new CompraDAO();
$compradao->salvar($comp, $conexao);



?>