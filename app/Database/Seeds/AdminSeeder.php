<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $data = [[
            'nama_admin' => 'upladmin',
            'email_admin' => 'upladmin@gmail.com',
            // utk generate password
            'password_admin' => password_hash('abcd', PASSWORD_DEFAULT),
        ], [

            'nama_admin' => 'root',
            'email_admin' => 'root@gmail.com',
            // utk generate password
            'password_admin' => password_hash('123', PASSWORD_DEFAULT),
        ]];
        $this->db->table('admin')->insertBatch($data);
    }
}
