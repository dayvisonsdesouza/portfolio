<?php

    if (isset($_POST["user"]) && ($_POST["password"]) && ($_POST["email"])) {
        
        $user = $_POST["user"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        include "server.php";

        $query = $server->query("SELECT nome FROM usuario");
        $login = 0;

        if ($result) {
            foreach ($result as $row) {
                if ($user == $row["nome"])
                $login = 1;
            break;
            }
        }

        if (!$login) {
            $server->exec("INSERT INTO usuario (nome, senha, email) VALUES ('$user', '$password', '$email')");
            header("location:projeto3.php");
        } else {
            echo "<script>alert('Usuário já existe!')</script>";
            header("Refresh: 0; url=registrar.php");
        }

    }
?>