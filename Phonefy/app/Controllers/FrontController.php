<?php

namespace App\Controllers;

use App\Core\App;
use Exception;

class FrontController
{
    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function post_individual()
    {
        return view('site/post_individual');
    }
}