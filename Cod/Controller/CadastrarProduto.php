<?php

include_once '..\Persistence\Connection.php';
include_once '..\Model\Produto.php';
include_once '..\Persistence\ProdutoDAO.php';

$nome= $_POST['cnome'];
$valor= $_POST['cvalor'];
$cod= $_POST['ccodigo'];

//Criando conexao
$conexao = new Connection();
$conexao = $conexao -> getConnection();
//Criando objeto produto
$prod = new Produto($nome, $valor, $cod);
//Criando objeto DAO
$produtodao = new ProdutoDAO();
//Salvando produto
$produtodao->salvar($prod, $conexao);



?>