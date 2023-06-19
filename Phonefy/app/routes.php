<?php

use App\Controllers\ExampleController;
use App\Controllers\PostController;
use App\Controllers\UserController;
use App\Controllers\FrontController;
use App\Controllers\SiteController;
use App\Core\Router;

//--------Admin--------//
$router->get('admin/dashboard', 'FrontController@dashboard');
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

//--------Public--------//
//Lista-posts
// $router->get('home/lista-posts', 'Lista_postsController@index');
$router->get('home/lista-posts/search', 'Lista_postsController@search');

$router->get('posts/post_individual', 'FrontController@post_individual');

$router->get('home/lista-posts', 'SiteController@posts');

?> 