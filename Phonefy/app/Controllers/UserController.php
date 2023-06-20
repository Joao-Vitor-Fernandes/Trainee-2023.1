<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{
    public function view_usuarios()
    {
        $page = 1;

        if (isset($_GET['pagina']) && !empty($_GET['pagina']))
        {
            $page = intval($_GET['pagina']);

            if ($page <= 0)
            {
                return redirect('admin/usuarios');
            }
        }

        $items_per_page = 1;
        $start_limit = $items_per_page * $page - $items_per_page;
        $rows_count = App::get('database')->countAll('users');
        
        if ($start_limit > $rows_count) {
            return redirect('admin/usuarios');
        }
        
        $total_pages = ceil($rows_count / $items_per_page);
        $users = App::get('database')->selectAll('users', $start_limit, $items_per_page);

        return view('admin/lista_usuarios', compact("users", "page", "total_pages"));

        // return view('admin/lista_usuarios', $tables);
    }

    public function show()
    {
        
    }

    public function create_usuarios()
    {
        $parameters = [
            'name' => $_POST['nome'],
            'email' => $_POST['email'],
            'password' => $_POST['senha'],
        ];

        app::get('database')->insert('users', $parameters);

        header('Location: /admin/usuarios');
    }

    public function update_usuarios()
    {
        $parameters = [
            'name' => $_POST['nome'],
            'email' => $_POST['email'],
            'password' => $_POST['senha']
        ];

        app::get('database')->edit($_POST['id'], 'users', $parameters);

        header('Location: /admin/usuarios');
    }

    public function delete_usuarios()
    {
        $id = $_POST['id'];
        app::get('database')->delete('users', $id);

        header('Location: /admin/usuarios');
    }
}