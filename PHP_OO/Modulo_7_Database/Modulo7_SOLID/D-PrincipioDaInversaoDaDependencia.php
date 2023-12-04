<?php
/*
    Principio da Inversão de Dependencia:
        Princípio que indica a estratégia de depender de interfaces ou classes abstratas, ao invés de classes concretas.

    Basicamente é usado quando precisa ter vários tipos de dependencias diferentes em uma classe, e tem que passar um objeto para poder manipular dados dentro da classe. 
    Por Exemplo: UsuarioDAO, teria que passar um objeto da classe do banco de dados para poder manipular dados do usuário dentro do banco. O correto seria passar um objeto que implementa uma interface do banco de dados, assim, não importa se eu mudar o banco de dados ele sempre terá os mesmos metódos.=
*/

interface DBConnection {
    public function connect();
}

class MySQLConnection implements DBConnection {
    public function connect(){}
}

class OracleConnection implements DBConnection {
    public function connect(){}
}

class UsuarioDAO {
    private $db;

    public function __construct(DBConnection $db){
        $this->db = $db;
    }
}