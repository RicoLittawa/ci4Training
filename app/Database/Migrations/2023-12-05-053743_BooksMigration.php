<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class BooksMigration extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'author' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'year' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATE',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tblbooks');
    }

    public function down()
    {
        $this->forge->dropTable('tblbooks');
    }
}
