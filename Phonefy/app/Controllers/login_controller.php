<?php

namespace App\Controllers;

use App\Core\App;

use Exception;

class login_controller extends controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        return view(site/login);
    }

    public function autenticacao()
    {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    }

}

