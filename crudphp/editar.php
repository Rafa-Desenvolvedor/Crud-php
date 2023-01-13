<?php

require 'config.php';

$usuario = [];
$nome = filter_input(INPUT_GET, 'nome');

if ($nome){
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE nome = :nome");
    $sql->bindValue(":nome", $nome);
    $sql->execute();

    if($sql->rowCount() >0){
        $usuario = $sql->fetch(PDO::FETCH_ASSOC);
    }else{
        header("location:index.php");
        exit;
    }
}else{
    header("location:index.php");

}
?>
<h1>Editar Usuario</h1>
<form method="POST" action="editar_action.php">

    <label>
        <br> Nome:<input type="text" name="nome" value="<?=$usuario['nome' ];?>"/> </br>
    </label>

    <label>
      <br>  Sexo:<input type="text" name="sexo"value="<?=$usuario['sexo' ];?>"/> </br>
    </label>

    <label>
      <br>  cpf:<input type="int" name="cpf"value="<?=$usuario['cpf' ];?>"/> </br>
    </label>

    <label>
      <br>  Data De Nascimento:<input type="date" name="datanascimento"value="<?=$usuario['datanascimento' ];?>"/> </br>
    </label>
    
    <label>
        <br> Email:<input type="text" name="email"value="<?=$usuario['email' ];?>"/> </br>
    </label>

    <label>
        <br> Celular:<input type="number" name="celular"value="<?=$usuario['celular' ];?>"/> </br>
    </label>

    <label>
        <br> Profissao:<input type="text" name="profissao"value="<?=$usuario['profissao' ];?>"/> </br>
    </label>

    <input type="submit" value="Atualizar"/>

</form>