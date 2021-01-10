<?php

    session_start();

    if (isset($_POST["user"]) && ($_POST["password"])) {
        $user = $_POST["user"];
        $password = md5($_POST["password"]);

        include "server.php";

        $dbquery = $server->query("SELECT nome, senha FROM usuario");
        $var = 0;

        if ($dbquery) {
            foreach ($dbquery as $row) {
                if (($user == $row["nome"]) && ($password == $row["senha"])) {
                    $var = 1;
                break;
                }
            }
        }

            if ($var) {
                 $_SESSION["logged"] = 1;
                header("location:paineldecontrole.php");
             } else {
             header("location:projeto3.php");
             }
}
?>