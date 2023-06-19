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
        // die(var_dump($_SERVER['REQUEST_URI']));
        if (!empty($pesquisa)) {
            $page = 1;
            if (isset($_GET['pagina']) && !empty($_GET['pagina']))
            {
                $page = intval($_GET['pagina']);
                
                if ($page <= 0)
                {
                    return redirect('home/lista-posts');
                }
            }
            
            $items_per_page = 3;
            $start_limit = $items_per_page * $page - $items_per_page;
            
            
            $posts = App::get('database')->selectAll('posts');
            $users = App::get('database')->selectAll('users');
            $resultados = App::get('database')->buscar('title', 'posts', $pesquisa, $start_limit, $items_per_page);
            
            $tableReultados = [
                'posts' => $resultados,
                'pesquisa' => $pesquisa
            ];
            
            $rows_count = App::get('database')->countSearch('title', 'posts', $pesquisa);
            $total_pages = ceil($rows_count / $items_per_page);
            // die(var_dump($total_pages));

            // var_dump($total_pages, $rows_count, $resultados);
            // die();

            // Associar o nome do autor aos posts(autor é o id do user)
            foreach ($tableReultados['posts'] as $post) {
                $author = $this->getUserById($users, $post->author);
                $post->author_name = $author->name;
            }

            $posts = $tableReultados['posts'];
            // var_dump($tableReultados['posts']);
            // die();
            // die(var_dump($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].$_SERVER['QUERY_STRING']));
            return view('site/lista_de_posts', compact("total_pages", "page", "posts" , "pesquisa"));
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