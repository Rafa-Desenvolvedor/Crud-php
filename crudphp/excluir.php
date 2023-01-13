<?php

require 'config.php';

$nome = filter_input(INPUT_GET,'nome');

if($nome){
    $sql = $pdo->prepare("DELETE FROM usuarios WHERE nome = :nome");
    $sql->bindValue(":nome",$nome);
    $sql->execute();

}

header("Location: index.php");

?>