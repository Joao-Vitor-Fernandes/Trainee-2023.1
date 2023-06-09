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
}