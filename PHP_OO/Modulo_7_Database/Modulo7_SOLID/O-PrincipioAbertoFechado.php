<?php
/* 
    O princípio aberto fechado, diz que uma classe/método deve estar aberto para extensão, mas fechado para modificação, ou seja, você pode melhorar ela, colocar mais funcionalidades, mas não pode modificar o que já existe.

    Exemplo abaixo: Tenho vários tipos de funcionários em minha empresa, CLT, Estágiário, PJ, cada um é calculado o salário de uma forma, para que na folha de pagamento não tenha que ficar sempre modificando quando a empresa fechar contrato com um tipo de funcionário novo, foi criado uma interface para padronizar o método de pagamento de todos os tipos de funcionários, então sempre que entrar um novo é só implementar a interface.

    Obs.: Independente de quantos tipos de funcionários entrar, o calculo de salario da folha de pagamento sempre vai funcionar.
*/

interface Remuneravel {
    public function remuneravel ();
}

class ContratoCLT implements remuneravel {
    public function remuneravel (){
        
    }
}

class Estagiario implements remuneravel {
    public function remuneravel (){
        
    }
}

class ContratoPJ implements remuneravel {
    public function remuneravel (){
        
    }
}

class FolhaPagamento {
    public function calcularSalario(Remuneravel $funcionario){
        return $funcionario->remuneravel();
    }
}