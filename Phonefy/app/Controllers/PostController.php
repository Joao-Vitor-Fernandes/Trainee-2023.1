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

    public function view_tabela_post(){
        // erro de sintaxe
        // $post = App::get('database')->select('posts', $id);
        //return view('admin/modal', $post); 
    }

    public function create_tabela_post(){

        // Obtenha o nome original da imagem
        $fileName = $_FILES['imagem']['name'];
        // Obtenha a extensão do arquivo
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
        // Gere um novo nome para o arquivo usando o título
        $newFileName = $_POST['titulo'] . '_' . $fileName . '.' . $fileExtension;
        // Defina o caminho completo do novo arquivo
        $imagePath = 'imagens-posts/' . $newFileName;
        // Mova o arquivo temporário para o diretório correto com o novo nome
        move_uploaded_file($_FILES['imagem']['tmp_name'], $imagePath);

        $parameters = [
            'title' => $_POST['titulo'],
            'author' => $_POST['autor'],
            'created_at' => $_POST['data'],
            'image' => $imagePath,
            'content' => $_POST['conteudo'],
        ];

        App::get('database')->insert('posts', $parameters);

        header('Location: /admin/posts');
    }

    public function delete_tabela_post(){
        $id = $_POST['id'];

        App::get('database')->delete('posts', $id);

        header('Location: /admin/posts');
    }
    public function index()
    {
        return view('site/teste');
    }

    public function editar_tabela_post()
    {
        $parameters = [
            'title' => $_POST['titulo'],
            'author' => $_POST['autor'],
            'created_at' => $_POST['data'],
            'image' => $_POST['imagem'],
            'content' => $_POST['conteudo'],
        ];

        header('Location: /admin');

        //erro de sintaxe
        //App::post('database')->edit($_POST['id'], 'posts', $parameters);

        header('Location: /admin');


    } 
}