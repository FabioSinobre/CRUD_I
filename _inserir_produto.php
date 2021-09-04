<?php
include 'conexao.php';

//conexão com a tabela
$nrproduto = $_POST['nrproduto'];
$produto = $_POST['produto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `_estoque`(`nr_produtos`, `nome_produto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nrproduto,'$produto','$categoria',$quantidade,'$fornecedor')";
$inserir = mysqli_query($conexao, $sql);//variavel

?>  
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="conteiner" style="width: 5000px; margin-top: 20px">
	<h4>Produto adicionado com sucesso!</h4>
	<div style="padding-top: 20px">
		<a href="index.html" role="button" class="btn btn-sm btn-primary">Novo cadastro</a>
	</div>
</div>