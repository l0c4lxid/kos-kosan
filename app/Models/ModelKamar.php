<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKamar extends Model
{
    protected $table = 'kamar';
    protected $primaryKey = 'id_kamar';
    protected $allowedFields = ['ukuran', 'kasur', 'meja', 'bantal', 'lemari_baju', 'kursi', 'ventilasi', 'jendela', 'ac', 'listrik'];
}