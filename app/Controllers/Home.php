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
    public function detail(): string
    {
        $model = new ModelKost();

        $kamar = $model->findAll();
        $data = [
            'judul' => 'Detail',
            'navigasi' => 'v_nav_2',
            'footer' => 'v_footer',
            'kamar' => $kamar,
        ];
        return view('v_detail', $data);
    }
    public function DetailKamar($id_kosan)
    {
        $model = new ModelKost();

        // Ambil data kosan berdasarkan $id_kosan
        $data['value'] = $model->find($id_kosan);
        $data['judul'] = 'Detail';
        $data['subjudul'] = 'EditDataKamar';
        $data['navigasi'] = 'v_nav_2';
        $data['footer'] = 'v_footer';
        $data['page'] = 'admin/v_edit_data_kamar';

        // Memuat view form edit kosan
        return view('/v_detail', $data);
    }
}