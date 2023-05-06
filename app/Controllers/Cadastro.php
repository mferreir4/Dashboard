<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use CodeIgniter\Model;
use App\Models\ClienteModel;
use Config\App;

class Cadastro extends BaseController
{
    public function cadastroEmail()
    {
        echo view('head');
        echo view('bootstrap');
        echo view('cadastro__email');
        $dados = $this->request->getPost();
        $email = $dados['email'];
    }

    public function verificaEmail()
    {
        $dados_model = Model('App\Models\ClienteModel' );
        $dados_model->teste();
    }

    public function cadastroInfo()
    {
        echo view('head');
        echo view('bootstrap');
        echo view('cadastro__info');
    }
    public function cadastrodados()
    {
        echo view('head');
        echo view('bootstrap');
        echo view('cadastro__dados');
    }
    public function cadastroproduto()
    {
        echo view('head');
        echo view('bootstrap');
        echo view('cadastro__produto');
    }
}




