<?php

require 'config.php';



$nome = filter_input(INPUT_POST, 'nome');

$sexo = filter_input(INPUT_POST, 'sexo');

$cpf = filter_input(INPUT_POST, 'cpf');

$datanascimento = filter_input(INPUT_POST, 'datanascimento');

$email = filter_input(INPUT_POST, 'email');

$celular = filter_input(INPUT_POST, 'celular');

$profissao = filter_input(INPUT_POST, 'profissao');

if($nome && $sexo && $cpf && $datanascimento && $email && $celular && $profissao){
    $sql = $pdo->prepare("UPDATE usuarios set nome = :nome,sexo = :sexo, cpf = :cpf, datanascimento = :datanascimento, email
    = :email, celular = :celular, profissao = :profissao  WHERE nome = :nome");
    
   
    $sql->bindValue(":nome",$nome);
    $sql->bindValue(":sexo",$sexo);
    $sql->bindValue(":cpf",$cpf);
    $sql->bindValue("datanascimento",$datanascimento);
    $sql->bindValue("email",$email);
    $sql->bindValue("celular",$celular);
    $sql->bindValue("profissao",$profissao);
    $sql->execute();
    
        header ("location: index.php");
        exit;
}else{
         header("Location: index.php");
         exit;
      
    }
