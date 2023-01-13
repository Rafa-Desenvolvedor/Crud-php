<?php

require 'config.php';

$nome = filter_input(INPUT_POST,'nome');
$sexo = filter_input(INPUT_POST,'sexo');
$cpf = filter_input(INPUT_POST,'cpf');
$datanascimento = filter_input(INPUT_POST,'datanascimento');
$email = filter_input(INPUT_POST,'email');
$celular = filter_input(INPUT_POST,'celular');
$profissao = filter_input(INPUT_POST,'profissao');







$sql = $pdo->prepare("INSERT INTO usuarios (nome,sexo,cpf,datanascimento,email,celular,profissao) VALUES (:nome, :sexo, :cpf, 
:datanascimento, :email, :celular,:profissao)");
$sql->bindValue(":nome", $nome);
$sql->bindValue(":sexo", $sexo);
$sql->bindValue(":cpf", $cpf);
$sql->bindValue(":datanascimento", $datanascimento);
$sql->bindValue(":email", $email);
$sql->bindValue(":celular", $celular);
$sql->bindValue(":profissao", $profissao);


$sql->execute();

header("Location: index.php");

