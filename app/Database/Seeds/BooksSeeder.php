<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BooksSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'author' => 'juan dela cruz',
            'year'    => '2023',
            'created_at'    => '2023-November-5',
            'updated_at'    => '2023-November-5',
        ];

        $this->db->table('tblbooks')->insert($data);
    }
}
