<?php $render('header'); ?>

<a href="<?=$base ?>/new">Adicionar Usuário</a>
<br>
<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['name']; ?></td>
            <td><?= $user['email']; ?></td>
            <td>
                <a href="<?=$base?>/user/<?=$user['id']?>/edit">[ editar ]</a>
                <a href="<?=$base?>/user/<?=$user['id']?>/del" onClick='return confirm("Tem certeza que deseja excluir o usuário <?= $user['name']; ?>?")'>[ excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php $render('footer'); ?>