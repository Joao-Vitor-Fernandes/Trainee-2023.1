<?php

use App\Controllers\ExampleController;
use App\Controllers\UserController;
use App\Controllers\FrontController;
use App\Core\Router;

$router->get('index', 'ExampleController@index');

$router->get('lista_usuarios', 'UserController@lista_de_usuarios');

$router->get('show', 'UserController@show');

$router->post('create', 'UserController@create');
$router->post('delete', 'UserController@delete');
$router->post('update', 'UserController@update');

$router->get('dashboard', 'FrontController@dashboard');
?> 