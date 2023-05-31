<?php

use App\Controllers\ExampleController;
use App\Controllers\PostController;
use App\Core\Router;

$router->get('admin', 'PostController@preenche_tabela_post');

$router->post('admin/adicionar', 'PostController@create_tabela_post');
$router->post('admin/excluir', 'PostController@delete_tabela_post');
$router->post('admin/editar', 'PostController@editar_tabela_post');

?> 