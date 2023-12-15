<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $table            = 'reservasi';
    protected $primaryKey       = 'id_reservasi';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_wahana', 'email_pengunjung', 'nama_pengunjung', 'asal_kota_pengunjung'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_reservasi';
    protected $updatedField  = 'tanggal_ubah';
}
