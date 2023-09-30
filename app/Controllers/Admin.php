<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelFasilitasParkir;
use App\Models\ModelKamar;
use App\Models\ModelKamarMandi;
use App\Models\ModelKost;
use App\Models\ModelPeraturan;
use App\Models\ModelFasilitasUmum;


class Admin extends BaseController
{

    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'subjudul' => 'Dashboard',
            'navigasi' => 'admin/v_navigasi_admin',
            'sidebar' => 'admin/v_sidebar_admin',
            'page' => 'admin/v_dashboard_admin',
        ];
        return view('admin/v_temp_admin', $data);
    }
    public function DataKamar()
    {
        $ModelKost = new ModelKost();
        $semuadata = $ModelKost->SemuaData();
        $data = [
            'judul' => 'Kamar',
            'subjudul' => 'DataKamar',
            'navigasi' => 'admin/v_navigasi_admin',
            'sidebar' => 'admin/v_sidebar_admin',
            'page' => 'admin/v_data_kamar',
            'kamar' => $semuadata,
        ];
        // var_dump($data);
        // die;
        return view('admin/v_temp_admin', $data);
    }
    public function TambahDataKamar()
    {
        $data = [
            'judul' => 'Kamar',
            'subjudul' => 'TambahDataKamar',
            'navigasi' => 'admin/v_navigasi_admin',
            'sidebar' => 'admin/v_sidebar_admin',
            'page' => 'admin/v_tambah_data_kamar',
        ];
        return view('admin/v_temp_admin', $data);
    }
    public function SimpanDataKamar()
    {
        $foto1 = $this->request->getFile('foto_kamar');
        $foto2 = $this->request->getFile('foto_kost');
        $dataKosan = [

            'nama_kost' => $this->request->getPost('nama_kost'),
            'alamat' => $this->request->getPost('alamat'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'link_maps' => $this->request->getPost('link_maps'),
            'nama_pemilik' => $this->request->getPost('nama_pemilik'),
            'no_hp' => $this->request->getPost('no_hp'),
            'jenis_kost' => $this->request->getPost('jenis_kost'),
            'harga' => $this->request->getPost('harga'),
            'jarak_ubsi' => $this->request->getPost('jarak_ubsi'),
            'deskripsi_tambahan' => $this->request->getPost('deskripsi_tambahan'),
            $namafoto1 = $foto1->getRandomName(),
            $namafoto2 = $foto2->getRandomName(),
            'foto_kost' => $namafoto1,
            'foto_kamar' => $namafoto2,
        ];

        $dataKamar = [
            'ukuran' => $this->request->getPost('ukuran'),
            'kasur' => $this->request->getPost('kasur'),
            'meja' => $this->request->getPost('meja'),
            'bantal' => $this->request->getPost('bantal'),
            'lemari_baju' => $this->request->getPost('lemari_baju'),
            'kursi' => $this->request->getPost('kursi'),
            'ventilasi' => $this->request->getPost('ventilasi'),
            'jendela' => $this->request->getPost('jendela'),
            'ac' => $this->request->getPost('ac'),
            'listrik' => $this->request->getPost('listrik'),
        ];

        $dataKamarMandi = [
            'ember' => $this->request->getPost('ember'),
            'toilet' => $this->request->getPost('toilet'),
            'tipe' => $this->request->getPost('tipe'),
            'bak_mandi' => $this->request->getPost('bak_mandi'),
            'shower' => $this->request->getPost('shower'),
        ];

        $dataPeraturan = [
            'tamu' => $this->request->getPost('tamu'),
            'penghuni' => $this->request->getPost('penghuni'),
            'pasutri' => $this->request->getPost('pasutri'),
            'bawa_anak' => $this->request->getPost('bawa_anak'),
            'akses' => $this->request->getPost('akses'),
        ];

        $dataFasilitasUmum = [
            'ruang_tamu' => $this->request->getPost('ruang_tamu'),
            'ruang_cuci' => $this->request->getPost('ruang_cuci'),
            'ruang_jemur' => $this->request->getPost('ruang_jemur'),
            'ruang_keluarga' => $this->request->getPost('ruang_keluarga'),
            'ruang_makan' => $this->request->getPost('ruang_makan'),
            'ruang_santai' => $this->request->getPost('ruang_santai'),
            'dapur' => $this->request->getPost('dapur'),
            'kulkas' => $this->request->getPost('kulkas'),
        ];

        $dataFasilitasParkir = [
            'parkir_mobil' => $this->request->getPost('parkir_mobil'),
            'parkir_motor' => $this->request->getPost('parkir_motor'),
            'parkir_sepeda' => $this->request->getPost('parkir_sepeda'),
        ];


        // Simpan data ke dalam database menggunakan model
        $ModelKamar = new ModelKamar();
        $ModelKamarMandi = new ModelKamarMandi();
        $ModelPeraturan = new ModelPeraturan();
        $ModelFasilitasUmum = new ModelFasilitasUmum();
        $ModelFasilitasParkir = new ModelFasilitasParkir();
        $ModelKost = new ModelKost();

        $idKamar = $ModelKamar->insert($dataKamar);
        $idKamarMandi = $ModelKamarMandi->insert($dataKamarMandi);
        $idPeraturan = $ModelPeraturan->insert($dataPeraturan);
        $idFasilitasUmum = $ModelFasilitasUmum->insert($dataFasilitasUmum);
        $idFasilitasParkir = $ModelFasilitasParkir->insert($dataFasilitasParkir);

        // Setelah data yang memiliki ketergantungan telah disimpan, gunakan ID yang baru saja dimasukkan
        // untuk menyimpan data ke tabel kosan
        $dataKosan['id_kamar'] = $idKamar;
        $dataKosan['id_kamar_mandi'] = $idKamarMandi;
        $dataKosan['id_peraturan'] = $idPeraturan;
        $dataKosan['id_fasum'] = $idFasilitasUmum;
        $dataKosan['id_fparkir'] = $idFasilitasParkir;

        $ModelKost->insert($dataKosan);
        // Pindahkan foto ke direktori yang diinginkan
        $foto1->move('foto', $namafoto1);
        $foto2->move('foto', $namafoto2);

        session()->setFlashdata('pesan', 'Berhasil Dikirim !');
        // Jika validasi berhasil, kembalikan ke halaman input dengan pesan berhasil
        return redirect()->to(base_url('/datakamar'));
    }
    public function EditKosan($id_kosan)
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

        // Jika Anda ingin mengambil data dari tabel terkait
        $data['kamar_data'] = $model->findAll();

        $data['judul'] = 'Kamar';
        $data['subjudul'] = 'EditDataKamar';
        $data['navigasi'] = 'admin/v_navigasi_admin';
        $data['sidebar'] = 'admin/v_sidebar_admin';
        $data['page'] = 'admin/v_edit_data_kamar';
        // var_dump($data);
        // die;
        // Memuat view form edit kosan
        return view('/admin/v_temp_admin', $data);
    }
    public function UpdateKosan($id_kosan)
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
        $dataKost = $model->find($id_kosan);

        if (!$dataKost) {
            // Tampilkan pesan kesalahan jika data tidak ditemukan
            return redirect()->to('/error-page')->with('error', 'Data not found.');
        }


        $dataToUpdate = [
            'nama_kost' => $this->request->getPost('nama_kost'),
            'alamat' => $this->request->getPost('alamat'),
            'rt' => $this->request->getPost('rt'),
            'rw' => $this->request->getPost('rw'),
            'kelurahan' => $this->request->getPost('kelurahan'),
            'kecamatan' => $this->request->getPost('kecamatan'),
            'link_maps' => $this->request->getPost('link_maps'),
            'nama_pemilik' => $this->request->getPost('nama_pemilik'),
            'no_hp' => $this->request->getPost('no_hp'),
            'jenis_kost' => $this->request->getPost('jenis_kost'),
            'harga' => $this->request->getPost('harga'),
            'jarak_ubsi' => $this->request->getPost('jarak_ubsi'),
            'deskripsi_tambahan' => $this->request->getPost('deskripsi_tambahan'),


            'ukuran' => $this->request->getPost('ukuran'),
            'kasur' => $this->request->getPost('kasur'),
            'meja' => $this->request->getPost('meja'),
            'bantal' => $this->request->getPost('bantal'),
            'lemari_baju' => $this->request->getPost('lemari_baju'),
            'kursi' => $this->request->getPost('kursi'),
            'ventilasi' => $this->request->getPost('ventilasi'),
            'jendela' => $this->request->getPost('jendela'),
            'ac' => $this->request->getPost('ac'),
            'listrik' => $this->request->getPost('listrik'),



            'tamu' => $this->request->getPost('tamu'),
            'penghuni' => $this->request->getPost('penghuni'),
            'pasutri' => $this->request->getPost('pasutri'),
            'bawa_anak' => $this->request->getPost('bawa_anak'),
            'akses' => $this->request->getPost('akses'),

            'ruang_tamu' => $this->request->getPost('ruang_tamu'),
            'ruang_cuci' => $this->request->getPost('ruang_cuci'),
            'ruang_jemur' => $this->request->getPost('ruang_jemur'),
            'ruang_keluarga' => $this->request->getPost('ruang_keluarga'),
            'ruang_makan' => $this->request->getPost('ruang_makan'),
            'ruang_santai' => $this->request->getPost('ruang_santai'),
            'dapur' => $this->request->getPost('dapur'),
            'kulkas' => $this->request->getPost('kulkas'),

            'parkir_mobil' => $this->request->getPost('parkir_mobil'),
            'parkir_motor' => $this->request->getPost('parkir_motor'),
            'parkir_sepeda' => $this->request->getPost('parkir_sepeda'),

        ];
        $foto1 = $this->request->getFile('foto_kost');
        $foto2 = $this->request->getFile('foto_kamar');
        $namafoto1 = $foto1->getRandomName();
        $namafoto2 = $foto2->getRandomName();
        $foto1->move('foto', $namafoto1);
        $foto2->move('foto', $namafoto2);

        // Set data foto ke array dataToUpdate
        $dataToUpdate['foto_kost'] = $namafoto1;
        $dataToUpdate['foto_kamar'] = $namafoto2;

        // Lakukan update data menggunakan model
        $model->update($id_kosan, $dataToUpdate);

        // Redirect kembali ke halaman list user level 2 dengan notifikasi
        return redirect()->to('/datakamar')->with('success', '');
    }
    public function HapusKosan($id_kosan)
    {
        $model = new ModelKost();

        // Hapus divisi berdasarkan id_$id_kosan
        $model->delete($id_kosan);

        // Redirect kembali ke halaman list divisi dengan notifikasi
        return redirect()->to('/datakamar')->with('success', '');
    }

}