<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [[
            'nama_user' => 'User1',
            'email_user' => 'user1@gmail.com',
            // utk generate password
            'password_user' => password_hash('12asx', PASSWORD_DEFAULT),
        ], [

            'nama_user' => 'User2',
            'email_user' => 'user2@gmail.com',
            // utk generate password
            'password_user' => password_hash('acsd', PASSWORD_DEFAULT),
        ]];
        $this->db->table('users')->insertBatch($data);
    }
}
