<?php

include "server.php";

if (isset($_POST["pName"]) && ($_POST["pCost"]) && ($_POST["pQuantity"])) {
    $pName = $_POST["pName"];
    $pCost= $_POST["pCost"];
    $pQuantity= $_POST["pQuantity"];

    $server->exec("INSERT INTO produto (nome, preco, quantidade) VALUES ('$pName', '$pCost', '$pQuantity')");

    header("location: paineldecontrole.php");

}


?>