<?php
namespace src\controllers;

use \core\Controller;
use src\models\User;

class UserController extends Controller {

    public function new() {
        $this->render('user/new');
    }

    public function newAction() {
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email){
            $data = User::select()->where('email', $email)->execute();
            if(count($data) === 0){
                User::insert(['name' => $name, 'email' => $email, 'date' => "now()"])->execute();

                $this->render('home');
                exit;   
            }
        }

        $this->render('user/new');

    }

    public function edit($userId) {
        $user = User::select()->where('id', $userId['id'])->execute();

        if($user){
            $this->render('user/edit', ['user' => $user]);
            exit;
        }

        $this->render('home');


        
    }

    public function del($userId) {
        echo "deletou o usuário " . $userId['id'];
    }
}