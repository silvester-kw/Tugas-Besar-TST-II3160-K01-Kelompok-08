<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Reservasi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_reservasi'   => [
                'type'          =>'INT',
                'constraint'    => 5,
                'unsigned'      => true,
                'auto_increment'=> true,
            ],
            'id_user' => [
                'type' => 'INT',
                'unsigned'       => true,
            ], 
            'jenis_tiket'   => [
                'type'          =>'VARCHAR',
                'constraint'    => 75,
            ],
            'nama_wahana'   => [
                'type'          =>'VARCHAR',
                'constraint'    => 75,
            ],
            'nama_pengunjung'   => [
                'type'          =>'VARCHAR',
                'constraint'    => 75,
            ],
            'asal_kota_pengunjung'   => [
                'type'          =>'VARCHAR',
                'constraint'    => 50,
            ],
            'tanggal_reservasi'   => [
                'type'          =>'DATETIME',
                //'null'          => true,
            ],
            'tanggal_ubah'   => [
                'type'          =>'DATETIME',
                //'null'          => true,
            ],
        ]);
        $this->forge->addKey('id_reservasi', true);
        $this->forge->createTable('reservasi');
    }

    public function down()
    {
        $this->forge->dropTable('reservasi');
    }
}
