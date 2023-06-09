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
        
    }

    public function create()
    {
        $parameters = [
            'name' => $_POST['nome'],
            'email' => $_POST['email'],
            'password' => $_POST['senha'],
        ];

        app::get('database')->insert('users', $parameters);

        header('Location: /lista_usuarios');
    }

    public function store()
    {

    }

    public function edit()
    {
  
    }

    public function update()
    {
        $parameters = [
            'name' => $_POST['nome'],
            'email' => $_POST['email'],
            'password' => $_POST['senha']
        ];

        app::get('database')->edit($_POST['id'], 'users', $parameters);

        header('Location: /lista_usuarios');
    }

    public function delete()
    {
        $id = $_POST['id'];
        app::get('database')->delete('users', $id);

        header('Location: /lista_usuarios');
    }
}