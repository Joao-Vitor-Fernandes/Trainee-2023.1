<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class SiteController
{
    public function posts()
    {
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
        $rows_count = App::get('database')->countAll('posts');
        
        if ($start_limit > $rows_count) {
            return redirect('home/lista-posts');
        }
        
        $total_pages = ceil($rows_count / $items_per_page);
        $posts = App::get('database')->selectAll('posts', $start_limit, $items_per_page);
        $users = App::get('database')->selectAll('users');
        // Associar o nome do autor aos posts(autor é o id do user)
        foreach ($posts as $post) {
            $author = $this->getUserById($users, $post->author);
            $post->author_name = $author->name;
        }

        return view('site/lista_de_posts', compact("posts", "page", "total_pages"));

        // return view('site/lista_de_posts');
    }

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