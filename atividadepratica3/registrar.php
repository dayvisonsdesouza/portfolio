<?php

include "server.php";


?>

<html>
<head>
<meta charset="utf-8">
	<meta lang="pt-br">
	<!-- Estilo CSS -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css"> 

</head>
<body>
<div id="containerRegistrar"> 

    <form method="POST" id="formID" action="cadastrarBanco.php" onsubmit="event.preventDefault(); validarSenha();">
        Usuário: <br><input type="text" name="user" id="input" placeholder="Digite seu usuário"></br>
        Email: <br><input type="text" name="email" id="input" placeholder="Digite seu email"></br>
        Senha: <br><input type="password" id="password" name="password" id="input" placeholder="Digite sua senha"></br>
        Confirme sua senha: <br><input type="password" id="passwordConf" name="passwordConf" id="input" placeholder="Confirme sua senha"></br>
        <button type="submit" value="Register" id="button">Cadastrar</button>
    </form>

        <button id="button" onclick="location.href='projeto3.php'">Voltar</button>

</div>

<script>

    function validarSenha() {

        var password = document.getElementById("password").value;
        var passwordConf = document.getElementById("passwordConf").value;

            if (password == passwordConf) {
                alert("Usuário criado com sucesso!");
                document.getElementById("formID").submit();
                
            } else {
                alert("Senhas não coincidem!")
                return false;

            } 

    }

</script>

</body>
</html>