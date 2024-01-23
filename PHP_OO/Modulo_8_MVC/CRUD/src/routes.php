<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

//Páginas referente aos usuários
$router->get('/new', 'UserController@new');
$router->post('/new', 'UserController@newAction');

$router->get('/user/{id}/edit', 'UserController@edit');

$router->get('/user/{id}/del', 'UserController@del');