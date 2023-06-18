<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class Lista_postsController
{
    public function index(){
        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');
        $tables = [
            'posts' => $posts,
            'users' => $users,
        ];

        // Associar o nome do autor aos posts(autor é o id do user)
        foreach ($posts as $post) {
            $author = $this->getUserById($users, $post->author);
            $post->author_name = $author->name;
        }

        return view('site/lista_de_posts', $tables);   
}

    public function search()
    {
        $pesquisa = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_SPECIAL_CHARS);

        if (!empty($pesquisa)) {
            $posts = App::get('database')->selectAll('posts');
            $users = App::get('database')->selectAll('users');
            $resultados = App::get('database')->buscar('title', 'posts', $pesquisa);

            $tableReultados = [
                'posts' => $resultados,
                'pesquisa' => $pesquisa
            ];

            // Associar o nome do autor aos posts(autor é o id do user)
            foreach ($tableReultados['posts'] as $post) {
                $author = $this->getUserById($users, $post->author);
                $post->author_name = $author->name;
            }
            return view('site/lista_de_posts', $tableReultados);
        } else {
            // Redirecionar para a página principal de listagem de posts
            header('Location: /home/lista-posts');
            exit();
        }
    }

    //Funções auxiliares
    private function getUserById($users, $userId)
    {
        foreach ($users as $user) {
            if ($user->id === $userId) {
                return $user;
            }
        }

        return null; // Caso o usuário não seja encontrado
    }

}