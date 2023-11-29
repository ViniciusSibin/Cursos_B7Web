<?php
    require 'config.php';
    require 'dao/UsuarioDAOMySQL.php';
    
    $usuarioDAO = new UsuarioDAOMySQL($pdo);

    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($id && $nome && $email){
        $usuario = $usuarioDAO->findById($id);
        $usuario->setNome($nome);
        $usuario->setEmail($email);

        $usuarioDAO->update($usuario);

        header("Location: index.php");
        exit;
    } else {
        header("Location: editar_usuario.php?id=$id&$email=$nome");
        exit;
    }
?>