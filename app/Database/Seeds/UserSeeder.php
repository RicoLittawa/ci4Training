<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email' => 'darth@theempire.com',
            'fullname'    => 'juan dela cruz',
            'password'    => 'admin',
        ];

        $this->db->table('tblusers')->insert($data);
    }
}
