<?php 
    require 'config.php';
    require 'dao/UsuarioDAOMySQL.php';
    
    $usuarioDAO = new UsuarioDAOMySQL($pdo);

    $usuario = false;
    $id = filter_input(INPUT_GET, 'id');

    if($id){
        $usuario = $usuarioDAO->findById($id);
    } 
    
    if($usuario === false ) {
        header("Location: index.php");
        exit;
    }
?>

<h1>Atualizar Usuário</h1>
<form action="editar_usuario_action.php" method="POST">
    <input type="hidden" name="id" value="<?=$usuario->getId();?>">

    <label>
        Nome:<br/>
        <input type="text" name="nome" value="<?=$usuario->getNome();?>">
    </label><br/><br/>
    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$usuario->getEmail();?>">
    </label><br/><br/>

    <input type="submit" value="Salvar">
</form>

<a href="index.php"><button type="submit">Voltar</button></a>