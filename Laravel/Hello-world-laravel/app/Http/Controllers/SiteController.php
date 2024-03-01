<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        // Aqui eu poderia criar uma lógica ...
        // Verificar se um usuário existe ...
        // Buscar dados de um usuário, etc ...
        $nome = 'Vinicius';

        $data = [
            'apelido_nome' => $nome
        ];

        return view('bemvindo', $data);

    }

    public function exit(){
        return view('sair');
    }

    public function users(Request $r){

        $data = [
            'quantidade' => $r->qnt
        ];

        return view('usuarios', $data);
    }
}
