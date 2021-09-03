<?php
include 'conexao.php';

//conexão com a tabela
$nrproduto = $_POST['nrproduto'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `_estoque`(`nr_produtos`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nrproduto,'$produto',$quantidade,'$categoria','$fornecedor')";
$inserir = mysqli_query($conexao, $sql);


?>  