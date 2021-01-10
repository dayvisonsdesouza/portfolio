<?php
    include "server.php";
    session_start();

   if (!(isset($_SESSION["logged"]))) {
       echo "<script>alert('É preciso fazer o login!')</script>";
       header("Refresh: 0; url = projeto3.php");
   }
   
   $asc = $server->query("SELECT * FROM produto ORDER BY preco ASC");
   $desc = $server->query("SELECT * FROM produto ORDER BY preco DESC");


?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
	 <meta lang="pt-br">
    <!-- Estilo CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Bem vindo ao Painel de Controle</title>
</head>
<body>

<div id="containerProdutos">

    <h3>Para inserir seu produto, atribua os valores e clique em inserir:</h3>
    
    <form action="registrarProduto.php" method="POST">
        <h2 id="title">Produtos</h2>
        Nome do Produto: <br><input type="text" name="pName" placeholder="Digite o nome do produto"></br>
        
        Preço: <br><input type="text" name="pCost" placeholder="Digite o preço do produto"></br>
        
        Quantidade: <br><input type="text" name="pQuantity" placeholder="Digite a quantidade do produto"></br>
        <button id="buttonInserir">Inserir</button>
    </form>
  </div>

    <div id="containerOrdem">
    <div class="row">
      <div class="col s6">
        <div id="ordem">
        <h3>Ordem Crescente</h3>
        </div>
          <?php
          if ($asc) {
              foreach ($asc as $row) {
                  echo $row['nome'] . ' R$ ' . $row['preco'] . '  ' . $row['quantidade'] . '</br>';
              }
          }

          ?>
      </div>
      <div class="col s6">
        <div id="ordem">
          <h3>Ordem Decrescente</h3>
        </div>
            <?php
              if ($desc) {
                  foreach ($desc as $row) {
                      echo $row['nome'] . ' R$ ' . $row['preco'] . '  ' . $row['quantidade'] . '</br>';
                  }
              }

            ?>
      </div>
    </div>
    
    <button id="buttonSair" onclick="location.href='sair.php'">Sair</button>
    
</div>
</body>
</html>