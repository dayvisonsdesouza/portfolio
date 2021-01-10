<?php

    include "server.php";
    session_start();

?>
<html>
<head>
    <meta charset="utf-8">
	<meta lang="pt-br">
	<!-- Estilo CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
    <title>Atividade 3</title>
</head>
<body>
    <div id="container">
        <form action="validacao.php" method="POST" >
             Usuário: <br><input type="text" name="user" id="input" placeholder="Digite seu usuário"></br>
             Senha: <br><input type="password" name="password" id="input" placeholder="Digite sua senha"></br>
             <button type="submit" value="Login" id="button">Entrar</button>
        </form>
            <button id="button" onclick="location.href='registrar.php'">Novo Usuário</button>
    </div>
</body>
</html>