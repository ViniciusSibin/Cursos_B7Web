<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'put'){
    parse_str(file_get_contents('php://input'), $input);

    $id = filter_var($input['id'] ?? null);
    $title = filter_var($input['title'] ?? null);
    $bory = filter_var($input['bory'] ?? null);

    if($id && $title && $bory){
        $sql = $pdo->prepare("UPDATE notes SET title=:title, bory=:bory WHERE id=:id");
        $sql->bindValue(':title', $title);
        $sql->bindValue(':bory', $bory);
        $sql->bindValue(':id', $id);
        $sql->execute();

        $array['result'] = [
            'msg' => 'Atualizado nota com sucesso',
            'id' => $id,
            'title' => $title,
            'bory' => $bory
        ];

    } else {
        $array['error'] = 'O title, bory ou o ID nao foram enviados.';
    }
} else {
    $array['error'] = 'Metodo nao reconhecido (Correto PUT)';
}


require('../return.php');