<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
               'id_user' => '1',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '1',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '1',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '1',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '1',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '1',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '1',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '2',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '2',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '2',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '2',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '2',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '3',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '3',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '3',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '3',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '3',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '3',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '4',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '4',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '5',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],
            [
               'id_user' => '5',
               'tanggal_reservasi' => '2023-12-25 13:00:00',
               'tanggal_ubah' => '2023-12-25 13:00:00',
            ],


        ];

        foreach ($data as $data_transaction) {
            $this->db->table('transaction')->insert($data_transaction);
        }
    }
}
