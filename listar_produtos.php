<!DOCTYPE html>
<html>
    <head>
    	<title>Listar de Produtos</title>
    	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
    	<div class="conteiner" style="margin-top: 40px">
    		<h3>Lista de produtos</h3>
    		<br>
    		<table class="table">
              <thead>
                <tr>
                  <th scope="col">Nro Produto</th>
                  <th scope="col">Nome Produto</th>
                  <th scope="col">Categoria</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Fornecedor</th>
                </tr>
              </thead>
              <tbody>
                  <?php 
                    include 'conexao.php';
                    $sql = "SELECT * FROM `_estoque`";
                    $busca = mysqli_query($conexao, $sql);
                    while ($array = mysqli_fetch_array($busca)) {
                        $id_estoque = $array['id_estoque'];
                        $nr_produtos = $array['nr_produtos'];
                        $nome_produto = $array['nome_produto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];
                    
                  ?>
                 <tr>
                  <td><?php echo $nr_produtos ?></td>
                  <td><?php echo $nome_produto ?></td>
                  <td><?php echo $categoria ?></td>
                  <td><?php echo $quantidade ?></td>
                  <td><?php echo $fornecedor ?></td>
                  <?php } ?>
                </tr>
              </tbody>
            </table>
    		
    	</div>
    	<script type="text/javascript" src="js/bootstrap.js"></script>	
    </body>
</html>