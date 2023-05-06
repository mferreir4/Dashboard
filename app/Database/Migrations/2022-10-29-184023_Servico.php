<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Servico extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'INT',
                'auto_increment'=> true,
                'null'=> false
            ],
            'nome'=>[
                'type'=>'varchar',
                'constraint' => 45,
                'null'=> false, 
            ],
            'nome_pet'=>[
                'type'=>'varchar',
                'constraint' =>45,
                'null'=> false,
            ],
            'data'=>[
                'type'=>'DATE',
                'null'=> false,
            ],
            'hora'=>[
                'type'=>'TIME',
                'null'=> false,
            ],
            'servico' =>[
                'type'=>'varchar',
                'constraint' =>45,
                'null'=> false
            ],
            'valor' =>[
                'type' => 'decimal(5,2)',
                'null' => false,
            ],
            'observacao'=>[
                'type'=>'TEXT',
                'null'=> true
            ],
            
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('servico');
    }

    public function down()
    {
        $this->forge->dropTable('servico');
    }
}
