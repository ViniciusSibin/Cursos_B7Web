<?php 
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if($id){
    $exclusao_usuario = $pdo->prepare("DELETE FROM usuarios WHERE id=:id");
    $exclusao_usuario->bindValue(':id', $id);
    $exclusao_usuario->execute();
} 
    
header('Location: index.php');
exit;

?>