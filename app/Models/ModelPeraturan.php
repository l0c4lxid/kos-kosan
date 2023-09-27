<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPeraturan extends Model
{
    protected $table = 'peraturan';
    protected $primaryKey = 'id_peraturan';
    protected $allowedFields = ['tamu', 'penghuni', 'pasutri', 'bawa_anak', 'akses'];
}