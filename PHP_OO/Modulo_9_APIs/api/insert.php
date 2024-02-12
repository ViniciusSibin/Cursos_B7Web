<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'post'){
    $title = filter_input(INPUT_POST, 'title');
    $bory = filter_input(INPUT_POST, 'bory');

    if($title && $bory){
        $sql = $pdo->prepare("INSERT INTO notes (title, bory) VALUES (:title, :bory)");
        $sql->bindValue(':title', $title);
        $sql->bindValue(':bory', $bory);
        $sql->execute();

        $array['result'] = 'Inserido nota com sucesso.';

    } else {
        $array['error'] = 'O title ou o bory nao foram enviados.';
    }
} else {
    $array['error'] = 'Metodo nao reconhecido (Correto POST)';
}


require('../return.php');