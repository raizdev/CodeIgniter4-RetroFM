<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HabnetNews extends Migration
{
    public function up()
    {
        $this->forge->addField([
             'id' => [
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true,
            ],
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true
            ],
            'title' => [
                'type' => 'varchar',
                'constraint' => '255',
                'null' => true
            ],
            'short_story' => [
                'type' => 'varchar',
                'constraint' => '255',
                'null' => true
            ],
            'full_story' => [
                'type' => 'text',
                'constraint' => '0',
                'null' => true
            ],
            'image' => [
                'type' => 'text',
                'constraint' => '0',
                'null' => true
            ],
            'author' => [
                'type' => 'int',
                'constraint' => '11',
                'null' => true
            ],
            'timestamp' => [
                'type' => 'int',
                'constraint' => '11',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('habnet_news');
    }
  
    public function down()
    {
        $this->forge->dropTable('habnet_news');
    }
}
