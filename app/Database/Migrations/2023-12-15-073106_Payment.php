<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaction extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_reservasi' => [
                'type' => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ], 
            'id_user' => [
                'type' => 'INT',
                'unsigned'       => true,
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
        $this->forge->createTable('transaction');
    }

    public function down()
    {
        $this->forge->dropTable('transaction');
    }
}