<?php

namespace App\Models;

use CodeIgniter\Model;

class RuangModel extends Model
{
    protected $table = 'ruang';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nimnip', 'tujuan', 'pic', 'tanggalp', 'waktum', 'waktus', 'status'];
}
