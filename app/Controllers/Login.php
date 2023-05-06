<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function login()
    {
        echo view ('login');    
    } 
}
