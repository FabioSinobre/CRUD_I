<?php
    include 'conexao.php';
    
    $id = $_POST['id'];
    //$nr_produto = $_POST['nr_produtos'];
    $nome_produto = $_POST['nome_produto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];
    
    $sql ="UPDATE `_estoque` SET `nome_produto`='$nome_produto',`categoria`='$categoria',`quantidade`=$quantidade,`fornecedor`='$fornecedor' WHERE id_estoque = $id";
    $atualizar = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<div class="conteiner" style="width: 400px">
		<h3>Atualizado com sucesso!</h3>
		<div style="margin-top: 15px">
			<a href="lista_produtos.php" class="btn btn-sn btn-warning">voltar</a>
		</div>
</div>