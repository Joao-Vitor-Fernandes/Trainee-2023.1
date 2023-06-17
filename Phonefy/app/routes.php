<?php

use App\Controllers\ExampleController;
use App\Controllers\PostController;
use App\Controllers\UserController;
use App\Core\Router;

//Posts
$router->get('admin/posts', 'PostController@preenche_tabela_post');
$router->post('admin/posts/adicionar', 'PostController@create_tabela_post');
$router->post('admin/posts/excluir', 'PostController@delete_tabela_post');
$router->post('admin/posts/editar', 'PostController@editar_tabela_post');
// Rota para servir imagens
$router->get('imagens-posts/{filename}', 'PostController@exibirImagem');

//Users
$router->get('admin/usuarios', 'UserController@view_usuarios');
$router->post('admin/usuarios/create', 'UserController@create_usuarios');
$router->post('admin/usuarios/delete', 'UserController@delete_usuarios');
$router->post('admin/usuarios/update', 'UserController@update_usuarios');

//site/posts
$router->get('home/lista-posts', 'PostController@preenche_tabela_site');

?> 