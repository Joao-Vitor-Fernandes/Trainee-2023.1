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
                return redirect('phonefy/posts');
            }
        }

        $items_per_page = 3;
        $start_limit = $items_per_page * $page - $items_per_page;
        $rows_count = App::get('database')->countAll('posts');
        
        if ($start_limit > $rows_count) {
            return redirect('phonefy/posts');
        }
        
        $total_pages = ceil($rows_count / $items_per_page);
        $posts = App::get('database')->selectAll('posts', $start_limit, $items_per_page);

        return view('site/lista_de_posts', compact("posts", "page", "total_pages"));

        // return view('site/lista_de_posts');
    }
}