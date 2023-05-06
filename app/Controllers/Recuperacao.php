<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Recuperacao extends BaseController
{
    public function recEmail()
    {		
        echo view('head');
        echo view('bootstrap');
        echo view ('recEmail');    
    } 
	
	public function recSenha()
    {		
        echo view('head');
        echo view('bootstrap');
        echo view ('recSenha');    
    }
}