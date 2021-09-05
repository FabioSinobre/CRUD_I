<?php
include 'conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Formulário de Cadastro</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <style type="text/css">
            #conteiner{
                width: 500px;
            }
            #botao{
	            background-color: #ff1168;
	            color: #ffffff;
	            font-weight: bold;
	        }
        </style>
    </head>
    <body>
        <div class="container" id="conteiner" style="margin-top: 40px">
        
        	 <h4>Formulário de Cadastro</h4>
         	 <form style="margin-top: 25px" action="_inserir_produto.php" method="post">
          		<?php 
          		    $sql = "SELECT * FROM `_estoque` WHERE id_estoque = $id";
          		    $buscar = mysqli_query($conexao, $sql);
          		    
          		    while ($array = mysqli_fetch_array($buscar)) {
          		        $id_estoque = $array['id_estoque'];
                        $nr_produtos = $array['nr_produtos'];
                        $nome_produto = $array['nome_produto'];
                        $categoria = $array['categoria'];
                        $quantidade = $array['quantidade'];
                        $fornecedor = $array['fornecedor'];
          		?>
          		    
                
          		
	            <div class="mb-3">
	              <label class="form-label">Número do Produto</label>
	              <input type="number" name="nrproduto" class="form-control" value="<?php echo $nr_produtos ?>" disabled>
	            </div>
              
	            <div class="mb-3">
	              <label class="form-label">Nome Produto</label>
	              <input type="text" class="form-control" name="produto" placeholder="Insira o nome do produto" required autocomplete="off">
	            </div>
              
	            <div class="mb-3">
	              <label class="form-label">Quantidade</label>
	              <input type="number" class="form-control" name="quantidade" placeholder="Insira a quantidade" required autocomplete="off">
	            </div>
            
	            <div class="mb-3">  
	                <label class="form-label">Categorias</label>
	                <select name="categoria" class="form-select">
	                    <option>Periféricos</option>
	                    <option>Hardwares</option>
	                    <option>Celulares</option>
	                    <option>Softwares</option>
	                    <option>Outros</option>
	                </select>
	            </div>    
              
	            <div class="mb-3">  
	                <label  class="form-label">Fornecedore</label>
	                <select name="fornecedor" class="form-select">
	                    <option>Fornecedo A</option>
	                    <option>Fornecedo B</option>
	                    <option>Fornecedo C</option>
	                </select>
	            </div>
            
	            <div style="text-align: right;">  
	            	<button id="botao" type="submit" class="btn btn-primary btn-sm">Atualizar</button>
	            </div>
            	<?php } ?>
          	</form>
        </div>
        
        <script type="text/javascript" src="js/bootstrap.js"></script>
    </body>
</html>