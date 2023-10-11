<?php 

/*
    INJEÇÃO DE DEPENDENCIA
    É quando é inserido uma classe dentro de outra classe
*/

use classes\matematica\Basico;
use Matematica as GlobalMatematica;

class Basico1 {
    public function somar($x, $y){
        return $x + $y;
    }
}

class Basico2 {
    public function somar($x, $y){
        $res = $x;
        for($q=0;$q<$y;$q++){
            $res++;
        }

        return $res;
    }
}

class Matematica {
    private $basico;

    public function __construct($dependencia){
        $this->basico = $dependencia;
    }

    public function somar($x, $y){
        return $this->basico->somar($x, $y);
    }
}

$mat = new Matematica(new Basico2);

$soma = $mat->somar(5, 34);
echo $soma;