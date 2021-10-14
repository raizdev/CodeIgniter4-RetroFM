<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class HabnetNewsReactions extends Migration
{
    public function up()
    {
        $this->forge->addField([
             'id' => [
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true,
            ],
            'article_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ],
            'message' => [
                'type' => 'varchar',
                'constraint' => '255',
                'null' => true
            ],
            'timestamp' => [
                'type' => 'int',
                'constraint' => '11',
                'null' => true
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('habnet_news_reactions');
    }
  
    public function down()
    {
        $this->forge->dropTable('habnet_news_reactions');
    }
}
