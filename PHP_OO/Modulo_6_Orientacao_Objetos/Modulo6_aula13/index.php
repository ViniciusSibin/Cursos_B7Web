<?php
/*
    NAMESPACE
    O namespace é utilizado para fazer divisão de diretórios, permitindo que se use duas classes com o mesmo nome de arquivos diferentes.

    MODO DE USO:
    $objeto = new classe1\MinhaClasse();

    --------------------------------------------------------------------

    USE
    Pode-se usar o comando use para dar um apelido para o diretório

    EXEMPLO:
    use classes\matematica\Basico as Basico;

    $basico = new Basico();
*/


require('classes/matematica/basico.php');

use classes\matematica\Basico;

$basico = new Basico();