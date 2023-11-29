<?php
require 'config.php';
require 'dao/UsuarioDAOMySQL.php';

$usuarioDAO = new UsuarioDAOMySQL($pdo);

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if($nome && $email){
    if($usuarioDAO->findByEmail($email) === false){
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($nome);
        $novoUsuario->setEmail($email);

        $usuarioDAO->add($novoUsuario);

        header("Location: index.php");
        exit;
    } else {
        header("Location: adicionar_usuario.php");
        exit;
    } 
} else {
    header("Location: adicionar_usuario.php");
    exit;
}

