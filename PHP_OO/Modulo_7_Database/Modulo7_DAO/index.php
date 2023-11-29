<?php
require 'config.php';
require 'dao/UsuarioDAOMySQL.php';

$usuarioDAO = new UsuarioDAOMySQL($pdo);
$usuarios = $usuarioDAO->findAll();

?>
<a href="adicionar_usuario.php">ADICIONAR USUARIO</a>

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
            <td><?= $usuario->getId(); ?></td>
            <td><?= $usuario->getNome(); ?></td>
            <td><?= $usuario->getEmail(); ?></td>
            <td><?= date("d/m/Y H:i:s", strtotime($usuario->getDataCadastro())); ?></td>
            <td>
                <a href="editar_usuario.php?id=<?= $usuario->getId(); ?>">[ editar ]</a>
                <a href="excluir_usuario_action.php?id=<?= $usuario->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir o usuário: <?=$usuario->getNome();?>?')">[ excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>