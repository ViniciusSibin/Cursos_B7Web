<?php
require 'config.php';

$usuarios = [];
$sql_usuarios_query = $pdo->query("SELECT * FROM usuarios");
if($sql_usuarios_query->rowCount() > 0){
    $usuarios = $sql_usuarios_query->fetchAll(PDO::FETCH_ASSOC);
}

?>
<a href="adicionar_usuario.html">ADICIONAR USUARIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>DATA_CRIAÇÃO</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
        <tr>
            <td><?= $usuario['id']; ?></td>
            <td><?= $usuario['nome']; ?></td>
            <td><?= $usuario['email']; ?></td>
            <td><?= date("d/m/Y H:i:s", strtotime($usuario['data_cadastro'])); ?></td>
            <td>
                <a href="editar_usuario.php?id=<?= $usuario['id'] ?>">[ editar ]</a>
                <a href="excluir_usuario.php?id=<?= $usuario['id'] ?>">[ excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>