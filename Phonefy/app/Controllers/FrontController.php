<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class FrontController
{
    public function index()
    {
        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');

        $count = count($posts);
        $relatedPosts = [];

        for ($i = $count - 1; $i >= 0 && count($relatedPosts) < 5; $i--) {
            $relatedPosts[] = $posts[$i];
        }

        // Associar o nome do autor aos posts relacionados (autor é o id do user)
        foreach ($relatedPosts as $post) {
            $author = $this->getUserById($users, $post->author);
            $post->author_name = $author->name;
        }

        return view('site/index', compact('relatedPosts'));
    }
    public function dashboard()
    {
        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');
        $relatedPosts = []; //posts relacionados

        // Obter os últimos três posts (excluindo o post individual)
        $count = count($posts);
        for ($i = $count - 1; $i >= 0 && count($relatedPosts) < 3; $i--) {
            $relatedPosts[] = $posts[$i];
        }

        // Associar o nome do autor aos posts relacionados
        foreach ($relatedPosts as $post) {
            $author = $this->getUserById($users, $post->author);
            $post->author_name = $author->name;
        }

        session_start();
        if (!isset($_SESSION['logado'])) {
            return redirect('admin/login');
        }

        return view('admin/dashboard', compact('relatedPosts'));
    }

    public function post_individual()
    {
        $id_pag = $_GET['id_pag']; //Id do post
        $selectedPost = null; //post do id
        $relatedPosts = []; //posts relacionados

        $posts = App::get('database')->selectAll('posts');
        $users = App::get('database')->selectAll('users');

        // Procurar o post pelo ID fornecido
        foreach ($posts as $post) {
            if ($post->id == $id_pag) {
                $selectedPost = $post;
            }
        }
        // Obter os últimos três posts (excluindo o post individual)
        $count = count($posts);
        for ($i = $count - 1; $i >= 0 && count($relatedPosts) < 3; $i--) {
            if ($posts[$i]->id != $id_pag) {
                $relatedPosts[] = $posts[$i];
            }
        }

        // Associar o nome do autor aos posts relacionados
        foreach ($relatedPosts as $post) {
            $author = $this->getUserById($users, $post->author);
            $post->author_name = $author->name;
        }
        // Associar o nome do autor ao post individual
        if ($selectedPost !== null) {
            $author = $this->getUserById($users, $selectedPost->author);
            $selectedPost->author_name = $author->name;
        }

        return view('site/post_individual', compact("selectedPost", "relatedPosts"));
    }



        
    
    // Função auxiliar para buscar o usuário pelo ID
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