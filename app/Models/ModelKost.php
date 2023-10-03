<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKost extends Model
{
    protected $table = 'kost';
    protected $primaryKey = 'id_kost';
    protected $allowedFields = ['id_kamar', 'id_kamar_mandi', 'id_peraturan', 'id_fasum', 'id_fparkir', 'nama_kost', 'alamat', 'rt', 'rw', 'kelurahan', 'kecamatan', 'nama_pemilik', 'no_hp', 'jenis_kost', 'harga', 'foto_kost', 'foto_kamar', 'jarak_ubsi', 'deskripsi_tambahan'];

    public function SemuaData()
    {
        // Lakukan join dengan model-model lainnya berdasarkan kolom yang sesuai
        $builder = $this->db->table('kost');
        $builder->select('kost.*, kamar.*, kamar_mandi.*, peraturan.*, fasilitas_umum.*, fasilitas_parkir.*');
        $builder->join('kamar', 'kamar.id_kamar = kost.id_kamar');
        $builder->join('kamar_mandi', 'kamar_mandi.id_kamar_mandi = kost.id_kamar_mandi');
        $builder->join('peraturan', 'peraturan.id_peraturan = kost.id_peraturan');
        $builder->join('fasilitas_umum', 'fasilitas_umum.id_fasum = kost.id_fasum');
        $builder->join('fasilitas_parkir', 'fasilitas_parkir.id_fparkir = kost.id_fparkir');

        // Eksekusi query
        $query = $builder->get();

        // Ambil hasil query dalam bentuk array
        $results = $query->getResult();

        return $results;
    }
}