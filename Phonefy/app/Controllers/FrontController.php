<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class FrontController
{
    public function index()
    {
        return view('site/index');
    }
    public function dashboard()
    {
        return view('admin/dashboard');
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