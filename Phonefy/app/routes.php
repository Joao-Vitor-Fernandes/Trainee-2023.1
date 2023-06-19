<?php

use App\Controllers\LoginController;
use App\Core\Router;

//Login
$router->get('login', 'LoginController@index');
$router->post('logar', 'LoginController@autenticacao');
$router->get('logout', 'LoginController@logout');

// $router->get('index', 'LoginController@index');
?> 