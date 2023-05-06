<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function produtos()
    {
        echo view('head');
        echo view('bootstrap');
        echo view ('banhotosa');
    }

    public function contato()
    {
        echo view('head');
        echo view('bootstrap');
        echo view('contato');
    }

    public function userPadrao()
    {
        echo view('head');
        echo view('bootstrap');
        echo view('usuario');
    }
}
