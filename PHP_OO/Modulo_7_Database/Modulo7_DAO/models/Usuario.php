<?php
class Usuario {
    private $id, $nome, $email, $dataCadastro;

    public function getId(){
        return $this->id;
    }   

    public function setId($id){
        $this->id = trim($id);
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = ucwords(trim($nome));
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = strtolower(trim($email));
    }

    public function getDataCadastro(){
        return $this->dataCadastro;
    }

    public function setDataCadastro($dataCadastro){
        $this->dataCadastro = $dataCadastro;
    }
}

interface UsuarioDAO {
    public function add(Usuario $u);
    public function findAll();
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
}