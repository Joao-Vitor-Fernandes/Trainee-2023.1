<?php

use App\Controllers\ExampleController;
use App\Controllers\PostController;
use App\Core\Router;

$router->get('admin', 'PostController@preenche_tabela_post');

$router->post('admin/adicionar', 'PostController@create_tabela_post');

?> 