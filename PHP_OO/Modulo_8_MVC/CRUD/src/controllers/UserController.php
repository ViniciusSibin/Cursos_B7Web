<?php
namespace src\controllers;

use \core\Controller;
use src\models\Usuario;

class UserController extends Controller {

    public function new() {
        $this->render('add');
    }

    public function newAction(){
        $nome = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($nome && $email){
            $data = Usuario::select()->where('email', $email)->execute();

            if(count($data) === 0){
                //inserir usuario
                Usuario::insert([
                    'nome' => $name,
                    'email' => $email
                ])->execute();

                //Redireciona para home
                echo "inseriu no banco";
                exit;
            }
        }

        //redireciona para tela de cadastro
        echo "Deu erro";
    }
}