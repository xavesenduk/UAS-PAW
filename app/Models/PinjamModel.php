<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model
{
    protected $table      = 'pinjam';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nimnip', 'barangdanjumlah', 'kontak', 'tujuan', 'tanggalm', 'tanggals', 'waktum', 'waktus', 'status'];
}
