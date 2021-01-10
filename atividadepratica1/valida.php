<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="content-type">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Estilo CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <title>Confirmação de Cadastro</title>
  </head>


<body onload="confirmacao()">
		<script>
			function confirmacao() {
			confirm("Cadastro efetuado com sucesso!");
			}
		</script>
	<div id="container">
		<?php
		session_start();
		$nome = $_POST['nome'];
		$nasc = $_POST['nasc'];
		$email = $_POST['email'];

		echo "Nome: ".$nome;
		echo "<br>Data de Nascimento: ".$nasc;
		echo "<br>E-mail: ".$email;
		?>
	</div>
	</body>
</html>
