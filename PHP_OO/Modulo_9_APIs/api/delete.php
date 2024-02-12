<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'delete'){
    parse_str(file_get_contents('php://input'), $input);

    $id = filter_var($input['id'] ?? null);

    if($id){
        $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $pdo->prepare("DELETE FROM notes WHERE id=:id");
            $sql->bindValue(':id', $id);
            $sql->execute();

            $array['result'] = [
                'msg' => 'Nota excluida com sucesso.',
                'id' => $id
            ];   
        } else {
            $array['error'] = 'ID nao encontrado no banco de dados';
        }

    } else {
        $array['error'] = 'O ID nao foi enviado.';
    }
} else {
    $array['error'] = 'Metodo nao reconhecido (Correto DELETE)';
}


require('../return.php');