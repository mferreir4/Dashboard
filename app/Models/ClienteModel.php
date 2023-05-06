<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cliente';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
    'nome',
    'sobrenome',
    'data_nasc',
    'cpf',
    'email',
    'celular',
    'endereco',
    'complemento'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function teste()
    {
        $query   = $this->query('SELECT bairro,cep,estado FROM endereco');
        $results = $query->getResult();
        
        foreach ($results as $row) {
            echo $row->bairro . '\n';
            echo $row->cep. '\n';
            echo $row->estado. '\n';
        }
    }

    public function LogIn( string $email) : array
    {
        $query = $this->where('email',$email) ->first();
        
        return !is_null($query) ? $query :[];

    }

    public function cliente()
    {
        $query = $this->findAll();
        $return_list = $query;

        return $return_list;
    }


}
