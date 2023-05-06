<?php

namespace App\Models;

use CodeIgniter\Model;

class VendasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'vendas';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nomes_resp',
        'nome_pets',
        'servicos',
        'valores_serv',
        'nome',
        'quantidade',
        'preco_ven',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';



    public function valores(){
        $query = $this->query ('SELECT sum(valores_serv) FROM vendas');
        $result_valores = $query->getRow();
    
        return $result_valores;
       
       }

    public function lista(){
        $query = $this->query('SELECT COUNT(id) FROM vendas');
        $result_valores = $query->getRow();
    
        return $result_valores;

    }
       
       
        public function total(){
        $query = $this->query ('SELECT sum(preco_ven + valores_serv)  FROM vendas');
        $result_valores = $query->getRow();
    
        return $result_valores;
    }
    
    public function produtos_sum(){
        $query = $this->query ('SELECT sum(preco_ven) FROM vendas');
        $result_valores = $query->getRow();
    
        return $result_valores;
       
       }

       public function vendas()
    {
        $query = $this->findAll();
        $return_list = $query;

        return $return_list;
    }
}
