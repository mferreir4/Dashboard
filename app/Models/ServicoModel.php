<?php

namespace App\Models;

use CodeIgniter\Model;


class ServicoModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'servico';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'nome_pet',
        'data',
        'hora',
        'servico',
        'valor',
        'observacao',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

        public function servicos()
    {
        $query = $this->findAll();
        $return_list = $query;

        return $return_list;
    }

    

    

}  
