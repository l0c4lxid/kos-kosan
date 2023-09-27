<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFasilitasUmum extends Model
{
    protected $table = 'fasilitas_umum';
    protected $primaryKey = 'id_fasum';
    protected $allowedFields = ['ruang_tamu', 'ruang_cuci', 'ruang_jemur', 'ruang_keluarga', 'dapur', 'kulkas', 'ruang_makan', 'ruang_santai'];
}