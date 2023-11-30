<?php 

/*
    O princípio da responsabilidade única diz que, uma classe deve fazer exclusivamente uma única função, ou seja, uma classe Usuario deve conter somente as informações de usuário, por exemplo, Nome, Endereço, Sexualidade. 

    As atividades que esse usuário irá executar no sistema, como por exemplo, CRUD no banco de dados deve ser feito em outra classe, utilizando o método DAO. 

    Isso evita de sempre que precisar utilizar um usuário tenha que carregar tudo envolvendo o Usuario no sistema.
*/

class Usuario {
    private $nome, $email, $celular;

    //geters e seters; 
}

class UsuarioDaoMysql {
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function add(){}
    public function findById(){}
    public function update(){}
    public function delete(){}
}