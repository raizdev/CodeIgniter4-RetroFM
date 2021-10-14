<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $fields = [
            'panelrank' => [
              'type' => 'int(1)'
            ],
            'force_logoff' => [
              'type' => 'int(1)'
           ]
        ];
      
        $this->forge->addColumn('users', $fields);
    }
  
    public function down()
    {
        $this->forge->dropTable('users');
    }
}
