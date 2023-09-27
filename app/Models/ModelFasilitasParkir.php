<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFasilitasParkir extends Model
{
    protected $table = 'fasilitas_parkir';
    protected $primaryKey = 'id_fparkir';
    protected $allowedFields = ['parkir_mobil', 'parkir_motor', 'parkir_sepeda'];
}