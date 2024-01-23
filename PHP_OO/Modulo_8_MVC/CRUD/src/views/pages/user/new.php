<?php $render('header'); ?>

<h2>Criar um novo Usuário</h2>
<form action="" method="post">
    <label>
        Nome:<br/>
        <input type="text" name="name">
    </label><br/><br/>
    <label>
        E-mail:<br/>
        <input type="email" name="email">
    </label><br/><br/>

    <input type="submit" value="Adicionar">
    
</form>
<br><br>
<a href="index.php"><button type="submit">Voltar</button></a>

<?php $render('footer'); ?>