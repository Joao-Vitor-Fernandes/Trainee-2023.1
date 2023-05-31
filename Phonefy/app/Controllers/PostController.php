<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class PostController
{
    public function preenche_tabela_post(){
        $posts = App::get('database')->selectAll('posts');
        $tables = [
            'posts' => $posts,
        ];
        return view('admin/modal', $tables);
    }

    public function create_tabela_post(){
        $parameters = [
            'title' => $_POST['titulo'],
            'author' => $_POST['autor'],
            'created_at' => $_POST['data'],
            'image' => $_POST['imagem'],
            'content' => $_POST['conteudo'],
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin');
    }

    public function delete_tabela_post(){
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);

        header('Location: /admin');
    }
    public function index()
    {
        return view('site/teste');
    }

    public function editar_tabela_post()
    {
        App::post('database')->editar('posts', $id);

        header('Location: /admin');
    }


    public function store()
    {

    }


    public function update()
    {
        
    }

   
}