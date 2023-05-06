<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Cliente extends Migration
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
            'constraint' => 20,
            'null' => false
            ],
            'sobrenome' => [
            'type' => 'VARCHAR',
            'constraint' => 25,
            'null' => false
            ],
            'data_nasc' => [
            'type' => 'DATE',
            'null' => false
            ],
            'cpf' => [
            'type' => 'CHAR',
            'constraint' => 11,
            'null' => false,
            ],
            'numero' => [
            'type' => 'INTEGER',
            'null' => false
            ],
            'email' => [
            'type' => 'VARCHAR',
            'constraint' => 45,
            'null' => false
            ],
            'telefone' => [
            'type' => 'CHAR',
            'constraint' => 10,
            ] ,
            'celular' => [
            'type' => 'CHAR',
            'constraint' => 16,
            'null'=>false
            ] ,
            'endereco' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => false
                ],
            'complemento' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
                'null' => false
            ],
            ]);
            $this->forge->addPrimaryKey('id');
            $this->forge->createTable('cliente');
    }

    public function down()
    {
        $this->forge->dropTable('cliente');
    }
}
