<?php $render('header'); 
$BASE = "http://localhost/Cursos_B7Web/PHP_OO/Modulo_8_MVC/CRUD/public";
?>

<h3>Cadastrar novo Usuário</h3>

<form action="" method="post">
    <label>
        Nome: <br/>
        <input type="text" name="name">
    </label><br><br>
    <label>
        E-mail: <br/>
        <input type="text" name="email">
    </label><br><br>

    <input type="submit" value="Adicionar">
</form>

<?php $render('footer'); ?>