<?php

namespace App\Controllers;

use App\Core\App;

use Exception;

class LoginController 
{
    // extends controller
    // public function __construct()
    // {
    //     parent::__construct();
    // }

    public function index()
    {
        return view('site/login');
    }

    public function autenticacao()
    {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    // $user = User::where('email', $email)->where('senha', $senha)->first();
    $id = App::get('database')->autenticar('users', $email, $senha);
    // die(var_dump($id));
    
    if($id > 0)
    {
        $_SESSION['logado'] = $id;
        return redirect('dashboard');
    }
    $_SESSION['error_message'] = "E-mail ou senha incorretos.";
    return redirect('login');
    }

    public function logout()
    {
        unset($_SESSION['logado']);
        return redirect('login');
    }

}

