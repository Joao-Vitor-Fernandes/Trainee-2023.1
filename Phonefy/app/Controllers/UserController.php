<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class UserController
{
    public function lista_de_usuarios()
    {
        $usuarios = App::get('database')->selectAll('users');
        $tables = [
            'users' => $usuarios,
        ];
        return view('admin/lista_usuarios', $tables);
    }

    public function show()
    {
        return view('admin/form_visualizar_usuarios');
    }

    public function create()
    {
        $parameters = [
            'name' => $_POST['nome'],
            'email' => $_POST['email'],
            'password' => $_POST['senha'],
        ];

        app::get('database')->insert('users', $parameters);

        header('Location: /lista_de_usuarios');
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        
    }

    public function delete()
    {
        $id = $_POST['id'];
        app::get('database')->delete('users', $id);

        header('Location: /lista_de_usuarios');
    }
}