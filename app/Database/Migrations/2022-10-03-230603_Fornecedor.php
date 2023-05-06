<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fornecedor extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
            'type' => 'INT',
            'auto_increment' => true,
            'null' => false
            ],
            'nome' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'cnpj' => [
            'type' => 'VARCHAR',
            'constraint' => 14,
            'null' => false,
            'unique'=> true
            ],
            'numero' => [
            'type' => 'VARCHAR',
            'constraint' => 16,
            'null' => false
            ],
            'email' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'endereco' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => true
            ] ,
            'complemento' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            ] ,
            'observacao' => [
            'type' => 'TEXT',
            'null' => true
            ]
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('fornecedor');
    }

    public function down()
    {
        $this->forge->dropTable('fornecedor');
    }
}
