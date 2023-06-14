<?php

use App\Controllers\ExampleController;
use App\Controllers\PostController;
use App\Core\Router;

$router->get('admin/posts', 'PostController@preenche_tabela_post');

$router->post('admin/posts/adicionar', 'PostController@create_tabela_post');
$router->post('admin/posts/excluir', 'PostController@delete_tabela_post');

$router->post('admin/posts/editar', 'PostController@editar_tabela_post');
/*$router->post('admin/visualizar', 'PostController@view_tabela_post');*/


?> 