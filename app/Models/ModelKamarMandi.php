<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKamarMandi extends Model
{
    protected $table = 'kamar_mandi';
    protected $primaryKey = 'id_kamar_mandi';
    protected $allowedFields = ['ember', 'toilet', 'tipe', 'bak_mandi', 'shower'];
}