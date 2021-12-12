<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table   = 'peminjaman';
    protected $useTimestamps = 'true';
    protected $primaryKey = 'NO';
    protected $allowedFields = ['tanggalp', 'nama', 'merek', 'jumlah', 'pengembalian'];
}
