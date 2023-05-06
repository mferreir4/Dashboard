<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use CodeIgniter\Model;
use App\Models\ServicoModel;
use App\Models\ClienteModel;
use App\Models\ProdutosModel;
use App\Models\FornecedorModel;
use App\Models\VendasModel;
use Config\App;
use CodeIgniter\Database\BaseBuilder;


class Dash extends BaseController
{
//Método construtor: Resposável em trazer as funções das Models
    private $servicoModel;
    private $produtosModel;
    Private $clienteModel;
    Private $vendasModel;
    Private $session;

        public function __construct(){
        

        $this->session=session();
       
        $this->servicoModel = new ServicoModel();
        $this->clienteModel = new ClienteModel();
        $this->produtoModel = new ProdutosModel();
        $this->fornecedorModel = new FornecedorModel();
        $this->vendasModel = new VendasModel();

        
    }
 
// Todas as views e querys são executadas abaixo

    public function Dashboard()
    {   
        
        $servicos = $this->servicoModel->paginate(9);
        $valores = $this->vendasModel->valores();
        $produtos= $this->vendasModel->produtos_sum();
        $total = $this->vendasModel->total();
        $listas = $this->vendasModel->lista();
        if($this->session->get('email')){
        return redirect()->to('/dashboard');
        }
        return view ('Dashboard/dashboard',
        ['servicos'=> $servicos,
        'valores' => $valores,
        'produtos'=> $produtos,
        'total'=> $total,
        'listas'=> $listas,
        'pager' => $this->servicoModel->pager
        ]);      
   
    }

    public function Servico_Compl($id){

        echo view ('Dashboard/servico_confirm',
        ['confirmado'=> $this->servicoModel->find($id)]);
    }

    public function Servico_list(){
       
        $valores = $this->vendasModel->valores();
        $produtos= $this->vendasModel->produtos_sum();
        $total = $this->vendasModel->total();
        $listas = $this->vendasModel->lista();
        $valores = $this->vendasModel->valores();
        $vendas = $this->vendasModel->paginate(9);
        echo view ('Dashboard/servico_list',
        ['valores'=> $valores,
        'vendas' => $vendas,
        'produtos'=> $produtos,
        'total'=> $total,
        'listas'=> $listas,
        'pager' => $this->vendasModel->pager
        ]);
    }
    
    
    public function Add_Valor(){

    $dados=$this->request->getPost(); 
    if($this->vendasModel->insert($dados)){
        $this->servicoModel->delete($dados);
        return redirect()->to('/dashboard');
    }
    else{
        
    } 
    }
    public function delete($id)
    {
             
        if($this->servicoModel->delete($id)){
            
            return redirect()->to('dashboard');
        } else
        
        {
            echo "Erro";
        }        
    }

    public function Servico()
    {
        echo view('Dashboard/servicos');
        
    }

    public function Fornecedor_add()
    {   
        $dados=$this->request->getPost();
        if($this->fornecedorModel->save($dados)){
        return redirect()->to('/dashboard/fornecedor'); 
        }
        else{
                echo 'erro';
            }

    }
    public function Fornecedores(){
        
        $produtos= $this->vendasModel->produtos_sum();
        $total = $this->vendasModel->total();
        $listas = $this->vendasModel->lista();
        $valores = $this->vendasModel->valores();
        $vendas = $this->vendasModel->paginate(9);
        $fornecedor = $this->fornecedorModel->paginate(8);
        $valores = $this->vendasModel->valores();
        
        echo view ('Dashboard/fornecedor_list',
        ['fornecedor'=> $fornecedor,
        'vendas' => $vendas,
        'produtos'=> $produtos,
        'total'=> $total,
        'listas'=> $listas,
        'pager' => $this->vendasModel->pager,
        'valores'=> $valores,
        'pages'=> $this->fornecedorModel->pager]);
    }
    public function Fornecedor_insert(){

        echo view('Dashboard/fornecedor_insert'); 

    }
    public function edit_Forn($id){

        echo view('Dashboard/fornecedor_insert',
        ['editar' => $this->fornecedorModel->find($id)]);
    }

    public function del_Forn($id){
        
        if($this->fornecedorModel->delete($id)){
        return redirect()->to('/dashboard/fornecedor');
    }else
    {
        echo 'erro';
    }
    }


    public function Produtos(){

        echo view ('Dashboard/produto_insert');
    }

    public function Add_produto(){
        
        $dados=$this->request->getPost();          
        
        if($this->produtoModel->save($dados)){
        return redirect()->to('dashboard/produtos_list');
        
    }
    else{
            echo 'erro';
        }

    }

    public function produto_venda($id){

        echo view ('Dashboard/produto_confirm',
        ['produto' =>$this->produtoModel->find($id)]);

    }

    public function Venda_prod(){

        $dados = $this->request->getPost();
        if($this->vendasModel->insert($dados)){
            return redirect()->to('/dashboard/servico_list');
        }
    }

    public function Produto_List(){
        $valores = $this->vendasModel->valores();
        $produtosM = $this->produtoModel->paginate(9);
        $produtos= $this->vendasModel->produtos_sum();
        $total = $this->vendasModel->total();
        $listas = $this->vendasModel->lista();
        $valores = $this->vendasModel->valores();
        $vendas = $this->vendasModel->paginate(9);


        echo view ('Dashboard/produto_list',
        ['valores' =>$valores,
        'produtosM'=> $produtosM,
        'produtos'=> $produtos,
        'total'=> $total,
        'listas'=> $listas,
        'pager' => $this->vendasModel->pager,
        'pager' => $this->produtoModel->pager
    ]
    );
    }
    
    public function Cliente_add(){
        
        $dados = $this->request->getPost();
        if($this->clienteModel->save($dados)){
        return redirect()->to('/dashboard/cliente_list'); 
    }
    else{
        echo 'erro';
    }
    }
    
    public function Cliente_insert(){
       
        echo view('Dashboard/cliente_insert');
    }

    public function Cliente_edit($id){
        echo view('Dashboard/cliente_insert',
        ['cliente' => $this->clienteModel->find($id)]);
    }

    public function delete_cli($id){
        
        if($this->clienteModel->delete($id)){

        return redirect()->to('dashboard/cliente_list');

        } 
        else{
            echo 'erro';
        }
    }

    public function CLiente_list(){
        $valores = $this->vendasModel->valores();
        $clientes = $this->clienteModel->paginate(9);
        $produtosM = $this->produtoModel->paginate(9);
        $produtos= $this->vendasModel->produtos_sum();
        $total = $this->vendasModel->total();
        $listas = $this->vendasModel->lista();
        $valores = $this->vendasModel->valores();
        $vendas = $this->vendasModel->paginate(9);
        
        return view ('Dashboard/cliente_list',
        ['clientes'=> $clientes,
        'valores' =>$valores,
        'produtosM'=> $produtosM,
        'produtos'=> $produtos,
        'total'=> $total,
        'listas'=> $listas,
        'pages' => $this->clienteModel->pager,
        'pager' => $this->produtoModel->pager
    ]
    );
    }

    public function edit($id){

        return view ('Dashboard/produto_insert',
        ['editar' => $this->produtoModel->find($id)]);

        

    }

    public function Login_dash(){

        return view ('Dashboard/login_dash');

    }

    public function Perfil(){

        return view ('Dashboard/perfil');
        
    }


    public function Logar(){

        $email = $this->request->getPost('email');
        $senha = $this->request->getPost('senha');
        

        $logar =$this->clienteModel->LogIn($email,$senha);
        
        if (count($logar) > 0){
        return redirect()->to('/dashboard');
        $this->session->set('email',$email);

        }
    else
        {
            session()->setFlashData('msg','Usuário ou Senha incorretos');
            return redirect()->to('dashboard/login_dash');
        }
       
    }
       

    public function Delete_prod($id){

        if($this->produtoModel->delete($id)){

            return redirect()->to('produto_insert');

        } 
        else{
            echo 'erro';
        }

    }

    
    
        public function Add_Servico()
    {   
        $dados=$this->request->getPost();          
        
        if($this->servicoModel->insert($dados)){
        return redirect()->to('dashboard');
        
    }
    else{
            echo 'erro';
    }

            
    }
   
}
