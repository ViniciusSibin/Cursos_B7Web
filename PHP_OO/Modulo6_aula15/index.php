<?php 
/**
 * AUTOLOAD
 * é uma função, que é executada automaticamente quando tenta instanciar uma classe e não é encontrado o caminho desta classe, dentro da função é passado o require buscando as classes.
 */

require 'autoload.php';

$m = new Matematica();

echo $m->somar(9, 15);