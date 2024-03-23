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

        $data = [
            'ingredientes' => [
                'farinha',
                'leite',
                'ovos 2',
                'margarina'
            ]
        ];

        return view('bemvindo', $data);

    }

    public function exit(){
        return view('sair');
    }

    public function exercise1(){

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'name' => 'Alessandro',
                'birth' => '29/01/1990',
                'age' => '29',
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'name' => 'Bonieky',
                'birth' => '10/11/1933',
                'age' => '90',
            ],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'name' => 'Alessandro',
                'birth' => '01/01/2020',
                'age' => '2'
            ]
        ];

        $dados['pessoas'] = $pessoas;

        return view('exercicio1', $dados);
        
    }

    public function exercise2(){
        $numero = 1;

        $url = 'https://i.pravatar.cc/150?img=';

        $data['url'] = $url;

        return view('exercicio2', $data);
    }
}
