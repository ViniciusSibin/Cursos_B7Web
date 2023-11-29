<?php 
    require 'config.php';

    $id = filter_input(INPUT_GET, 'id');

    if($id){
        $sql_usuario = $pdo->prepare("SELECT * FROM usuarios WHERE id=:id");
        $sql_usuario->bindValue(':id', $id);
        $sql_usuario->execute();

        $usuario = $sql_usuario->fetch(PDO::FETCH_ASSOC);
    }
?>

<h1>Atualizar Usuário</h1>
<form action="editar_usuario_action.php" method="post">
    <label>
        Nome:<br/>
        <input type="text" name="nome" value="<?=$usuario['nome']?>">
    </label><br/><br/>
    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$usuario['email']?>">
    </label><br/><br/>
    <input type="hidden" name="id" value="<?=$usuario['id']?>">
    <input type="submit" value="Adicionar">
    
</form>
<a href="index.php"><button type="submit">Voltar</button></a>