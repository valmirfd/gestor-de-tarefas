<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Main extends BaseController
{
    public function index()
    {      
                
    }

    public function login()
    {
        return view('login_frm');
    }

    public function login_submit()
    {
        echo 'Login submit requisitado';
    }
}
