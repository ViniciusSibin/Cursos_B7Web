<?php
require_once 'models/Usuario.php';

class UsuarioDAOMysQL implements UsuarioDAO {
    public $pdo;

    public function __construct(PDO $conexaoBanco){
        $this->pdo = $conexaoBanco;
    }


    public function add(Usuario $u){
        $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, email, data_cadastro) VALUES (:nome, :email, NOW())");
        $sql->bindValue(":nome", $u->getNome());
        $sql->bindValue(":email", $u->getEmail());
        $sql->execute();

        $u->setId($this->pdo->lastInsertId());
        return $u;
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
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $usuarioBanco = $sql->fetch();

            $usuario = new Usuario();
            $usuario->setNome($usuarioBanco['nome']);
            $usuario->setEmail($usuarioBanco['email']);
            $usuario->setDataCadastro($usuarioBanco['data_cadastro']);

            return $usuario;
        } else {
            return false;
        }
    }

    public function findByEmail($email){
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();

        if($sql->rowCount() > 0){
            $usuarioBanco = $sql->fetch();

            $usuario = new Usuario();
            $usuario->setNome($usuarioBanco['nome']);
            $usuario->setEmail($usuarioBanco['email']);
            $usuario->setDataCadastro($usuarioBanco['data_cadastro']);

            return $usuario;
        } else {
            return false;
        }
    }

    public function update(Usuario $u){

    }

    public function delete($id){

    }
}