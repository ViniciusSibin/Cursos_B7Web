<?php
/*
    Em uma interface, deve-se ter somente métodos que serão implementados por todas as classes que irão implementa-la.
*/

interface Aves {
    public function setLocation($lat, $lng);
    public function render();
}

interface AvesQueVoam extends Aves {
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam {
    public function setLocation($lat, $lng){}
    public function setAltitude($alt){}
    public function render(){}
}

class pinguim implements Aves {
    public function setLocation($lat, $lng){}
    public function render(){}
}
