<?php
namespace src\controllers;

use \core\Controller;

class UserController extends Controller {

    public function new() {
        $this->render('add');
    }

    public function newAction(){
        echo "recebido";
    }
}