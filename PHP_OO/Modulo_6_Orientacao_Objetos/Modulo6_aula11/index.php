<?php 
//INTERFACE
//Basicamente é um guia de implementação de uma classe, um modelo para todas as classes que forem implementadas da interface, sendo assim todas as classes que implementarem são obrigadas a ter todos os métodos que foram declarados na interface.

interface Database {
    public function listarProdutos ();
    public function adicionarProdutos ();
    public function alterarProdutos ();
}

class MysqlDB implements Database {
    public function listarProdutos (){
        echo "Produtos do banco Mysql";
    }

    public function adicionarProdutos (){
        echo "Adicionado produto ao banco Mysql";
    }

    public function alterarProdutos (){
        echo "Alterado produto do banco Mysql";
    }
}

class OracleDB implements Database {
    public function listarProdutos (){
        echo "Produtos do banco OracleDB";
    }

    public function adicionarProdutos (){
        echo "Adicionado produto ao banco OracleDB";
    }

    public function alterarProdutos (){
        echo "Alterado produto do banco OracleDB";
    }
}


$db = new MysqlDB();

$db->adicionarProdutos();