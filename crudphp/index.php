<?php



require 'config.php';
$lista = [];
//$sql = $pdo->query("SELECT * FROM usuarios where datanascimento <='2000-01-01'and sexo='feminino'");
$sql = $pdo->query("SELECT * FROM usuarios WHERE datanascimento > '2003-01-01' and sexo='feminino'");
if($sql->rowCount() >0){
    $lista = $sql->fetchALL(PDO::FETCH_ASSOC);
}
?>

<h1>Listagem De Usuarios</h1>

<table border="1">
    <tr>
        <th>Nome</th>
        <th>Sexo</th>
        <th>CPF</th>
        <th>Data De Nascimento</th>
        <th>E-mail</th>
        <th>Celular</th>
        <th>Profissão</th>
        <th>Ações</th>

    </tr>

    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['sexo'];?></td>
            <td><?=$usuario['cpf'];?></td>
            <td><?=$usuario['datanascimento'];?></td>
            <td><?=$usuario['email'];?></td>
            <td><?=$usuario['celular'];?></td>
            <td><?=$usuario['profissao'];?></td>
            
            <td>
                <a href="editar.php?nome=<?=$usuario['nome'];?>">[ Editar ]</a>
                <a href="excluir.php?nome=<?=$usuario['nome'];?>">[ Excluir ]</a>
            </td>
       
        </tr>




    <?php endforeach; ?>


</table>

<a href="cadastrar.php">Cadastrar Usuarios</a>