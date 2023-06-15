<?php

use App\Controllers\ExampleController;
use App\Controllers\UserController;
use App\Core\Router;

$router->get('index', 'ExampleController@index');

$router->get('admin/usuarios', 'UserController@view_usuarios');
$router->post('admin/usuarios/create', 'UserController@create_usuarios');
$router->post('admin/usuarios/delete', 'UserController@delete_usuarios');
$router->post('admin/usuarios/update', 'UserController@update_usuarios');


?> 