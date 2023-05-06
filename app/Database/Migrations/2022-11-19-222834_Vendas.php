<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Vendas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'auto_increment'=> true,
                'null'=> false
            ],
            'nomes_resp'=>[
                'type'=>'varchar',
                'constraint' => 45,
                'null'=> false, 
            ],
            'nome_pets'=>[
                'type'=>'varchar',
                'constraint' =>45,
                'null'=> false,
            ],
            'servicos' =>[
                'type'=>'varchar',
                'constraint' =>45,
                'null'=> false
            ],
            'valores_serv' =>[
                'type' => 'decimal(5,2)',
                'null' => false,
            ],
            'nome' => [
                'type' => 'VARCHAR',
                'constraint' => 60,
                'null' => false
            ],
            'preco_ven' => [
                'type' => 'INTEGER',
                'null' => false
                ] ,
            'quantidade' => [
                    'type' => 'decimal(5,2)',
                    'null' => false
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('vendas');
    }

    public function down()
    {
        $this->forge->dropTable('vendas');
    }
}
