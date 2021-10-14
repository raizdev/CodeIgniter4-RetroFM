<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HabnetPermissionSeeder extends Seeder
{
        public function run()
        {
            $data = [
                [
                    'id'      => 1,
                    'ptype'   => 'p',
                    'v0'      => 7,
                    'v1'      => '\App\Controllers\Admin\User'
                ]
            ];

            $this->db->table('habnet_permissions')->insertBatch($data);
        }
}