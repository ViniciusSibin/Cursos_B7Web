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

                $this->redirect('/');
                exit;   
            }
        }

        $this->redirect('/user/new');

    }

    public function edit($userId) {
        $user = User::select()->find($userId['id']);

        if($user){
            $this->render('user/edit', ['user' => $user]);
            exit;
        }

        $this->render('home');


        
    }

    public function editAction($userId){
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');

        if($name && $email){
            User::update(['name' => $name, 'email' => $email])->where('id', $userId['id'])->execute();

            $this->redirect('/');
            exit;  
        }

        $this->redirect('/user/' . $userId['id'] . '/edit');
    }

    public function del($userId) {
        User::delete()->where('id', $userId['id'])->execute();

        $this->redirect('/');
    }
}