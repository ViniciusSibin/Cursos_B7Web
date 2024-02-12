<?php
require('../config.php');

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'get'){
    $sql = $pdo->query('SELECT * FROM notes');
    if($sql->rowCount() > 0){
        $data = $sql->fetchall(PDO::FETCH_ASSOC);
        foreach($data as $item){
            $array['result'][] = [
                'id' => $item['id'],
                'title' => $item['title']
            ];
        }
    }
} else {
    $array['error'] = 'Método não reconhecido (Correto GET)';
}

require('../return.php');