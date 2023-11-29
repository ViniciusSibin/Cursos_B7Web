<?php
require_once 'models/Usuario.php';

class UsuarioDAOMysQL implements UsuarioDAO {
    public $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }


    public function add(Usuario $u){

    }

    public function findAll(){
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM usuarios");

        if($sql->rowCount() > 0){
            $dados = $sql->fetchAll();

            foreach($dados as $item){
                $usuario = new Usuario();

                $usuario->setId($item['id']);
                $usuario->setNome($item['nome']);
                $usuario->setEmail($item['email']);
                $usuario->setDataCadastro($item['data_cadastro']);

                $array[] = $usuario;
            }
        }

        return $array;
    }

    public function findById($id){

    }

    public function update(Usuario $u){

    }

    public function delete($id){

    }
}