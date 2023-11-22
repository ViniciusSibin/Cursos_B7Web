<?php
    require 'config.php';

    $id = filter_input(INPUT_POST, 'id');
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    if($id && $nome && $email){
        $update = $pdo->prepare("UPDATE usuarios SET nome=:nome, email=:email WHERE id = :id");
        $update->bindValue(':nome', $nome);
        $update->bindValue(':email', $email);
        $update->bindValue(':id', $id);
        $update->execute();

        header("Location: index.php");
        exit;

    } else {
        header("Location: editar_usuario.php?id=$id&$email=$nome");
        exit;
    }
?>