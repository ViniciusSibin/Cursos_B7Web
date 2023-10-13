<?php

class Calculator {
    private float $contaAtual = 0;

    public function add($numero){
        $this->contaAtual = $this->contaAtual + $numero;
    }

    public function sub($numero){
        $this->contaAtual = $this->contaAtual - $numero;
    }
    
    public function multply($numero){
        $this->contaAtual = $this->contaAtual * $numero;
    }
    
    public function divide($numero){
        $this->contaAtual = $this->contaAtual / $numero;
    }

    public function total(){
        return $this->contaAtual;
    }

    public function clear(){
        $this->contaAtual = 0;
    }
}