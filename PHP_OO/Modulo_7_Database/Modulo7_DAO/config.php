<?php
$db = 'mysql';
$db_host='127.0.0.1';
$db_name='B7web_PHP-OO';
$db_user='root';
$db_pass='';
$pdo = new PDO("$db:dbname=$db_name;host=$db_host","$db_user","$db_pass");