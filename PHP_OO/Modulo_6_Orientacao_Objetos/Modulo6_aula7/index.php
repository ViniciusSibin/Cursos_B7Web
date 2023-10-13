<?php
/*  
    Método estático
    é basicamente um método que irá ter dentro da classe, mas ele é "idependente", ou seja, ele pode ser usado externamente.
*/

class Matematica {
    public static function somar ($x, $y){
        return $x + $y;
    }
}

//Quando não é estatica deve-se referenciar a classe, exemplo abaixo.
$m = new Matematica();
echo "Não estática: " . $m->somar(10, 20);


//Quando a função é estatica não é necessário referenciar;
echo "<br>Estática: " . Matematica::somar(30, 20);