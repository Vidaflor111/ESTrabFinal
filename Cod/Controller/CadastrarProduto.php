<?php

include_once '..\Persistence\Connection.php';
include_once '..\Model\Produto.php';
include_once '..\Persistence\ProdutoDAO.php';

$nome= $_POST['cnome'];
$valor= $_POST['cvalor'];
$cod= $_POST['ccodigo'];


$conexao = new Connection();
$conexao = $conexao -> getConnection();

$prod = new Produto($nome, $valor, $cod);

$produtodao = new ProdutoDAO();
$produtodao->salvar($prod, $conexao);



?>