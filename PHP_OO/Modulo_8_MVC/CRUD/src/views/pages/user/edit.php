<?php $render('header'); ?>

<h2>Editar o usuario <?=$user['name']?></h2>
<form action="" method="post">
    <label>
        Nome:<br/>
        <input type="text" name="name" value="<?=$user['name']?>">
    </label><br/><br/>
    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$user['email']?>">
    </label><br/><br/>

    <input type="submit" value="Adicionar">
    
</form>
<br><br>
<a href="<?=$base ?>"><button type="submit">Voltar</button></a>

<?php $render('footer'); ?>