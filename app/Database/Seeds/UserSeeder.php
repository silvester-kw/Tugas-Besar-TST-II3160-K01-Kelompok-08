<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email' => 'silvester@gmail.com',
                'password' => md5('silvester'), 
            ],
            [
               'email' => 'enji@gmail.com',
               'password' => md5('enji'), 
            ],
            [
                'email' => 'caris@gmail.com',
                'password' => md5('caris'), 
            ],
            [
                'email' => 'lala@gmail.com',
                'password' => md5('lala'), 
            ],
            [
                'email' => 'nana@gmail.com',
                'password' => md5('nana'), 
            ],
            [
                'email' => 'admin@gmail.com',
                'password' => md5('admin'), 
            ]
        ];

        foreach ($data as $data_user) {
            $this->db->table('user')->insert($data_user);
        }
    }
}
