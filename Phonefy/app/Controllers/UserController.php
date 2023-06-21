<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{
    public function view_usuarios()
    {
        session_start();
        if (!isset($_SESSION['logado'])) {
            return redirect('admin/login');
        }

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

        $usuarioTotal = App::get('database')->selectAll('users');
        $usuarioAdmin = $this->getUserById($usuarioTotal, $_SESSION['logado']);

        return view('admin/lista_usuarios', compact("users", "page", "total_pages", 'usuarioAdmin'));

        // return view('admin/lista_usuarios', $tables);
    }

    public function show()
    {
        
    }

    public function create_usuarios()
    {
        session_start();
        if (!isset($_SESSION['logado'])) {
            return redirect('admin/login');
        }
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
        session_start();
        if (!isset($_SESSION['logado'])) {
            return redirect('admin/login');
        }
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
        session_start();
        if (!isset($_SESSION['logado'])) {
            return redirect('admin/login');
        }
        $id = $_POST['id'];
        app::get('database')->delete('users', $id);

        header('Location: /admin/usuarios');
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