<?php 
    session_start();
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redefina sua senha</title>
</head>
<body>


    <form method="POST" action="projeto2.php" name="fPassForm">
        <p> Nome: <?php echo $_SESSION["sessionUser"]; ?> 
        <p> Sua senha é: <?php echo $_SESSION["sessionPassword"]; ?>

        <p> usuário: <input type="text" id="user" name="user" placeholder="Digite seu usuário">
        <p> senha: <input type="password" id="password" name="password" placeholder="Digite sua Senha">
        <p> confirme sua senha: <input type="password" id="passwordConf" name="passwordConf" placeholder="Confirme sua Senha">
        <p> <button type="submit" onclick="passwordValidation()">enviar</button>

        <button onclick="window.location.href='projeto2.php'">Voltar</button>
    </form>

    <script>
    var password = document.getElementById("password");
    var passwordConf = document.getElementById("passwordConf");

    function passwordValidation() {
        if (password != passwordConf) {
            alert("Senhas não coincidem!");
        }
    }
    
    </script>
    
    

</body>
</html>