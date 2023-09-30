<?php

namespace App\Controllers;

use App\Models\ModelKost;

class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelKosan = new ModelKost();
    }
    public function index(): string
    {
        $ModelKost = new ModelKost();
        $semuadata = $ModelKost->SemuaData();
        $data = [
            'judul' => 'Home',
            'navigasi' => 'v_nav',
            'footer' => 'v_footer',
            'kamar' => $semuadata,
        ];
        return view('v_temp_home', $data);
    }

    public function DetailKamar($id_kosan)
    {
        $model = new ModelKost();

        // Lakukan join dengan model-model lainnya berdasarkan kolom yang sesuai
        $model->select('*');
        $model->join('kamar', 'kamar.id_kamar = kost.id_kamar');
        $model->join('kamar_mandi', 'kamar_mandi.id_kamar_mandi = kost.id_kamar_mandi');
        $model->join('peraturan', 'peraturan.id_peraturan = kost.id_peraturan');
        $model->join('fasilitas_umum', 'fasilitas_umum.id_fasum = kost.id_fasum');
        $model->join('fasilitas_parkir', 'fasilitas_parkir.id_fparkir = kost.id_fparkir');

        // Ambil data kosan berdasarkan $id_kosan
        $data['value'] = $model->find($id_kosan);

        if (!$data['value']) {
            // Tampilkan halaman error jika data tidak ditemukan
            return view('error_page');
        }

        // Data untuk tampilan
        $data['judul'] = 'Detail Kamar';
        $data['subjudul'] = 'Edit Data Kamar';
        $data['navigasi'] = 'v_nav_2';
        $data['footer'] = 'v_footer';
        $data['page'] = 'admin/v_edit_data_kamar';

        // Memuat view form edit kosan
        return view('v_detail', $data);
    }
}