<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Kosan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="<?= base_url('simpandatakamar') ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-body ">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="col-form-label">Nama Kost</label>
                                        <input type="text" class="form-control " name="nama_kost"
                                            placeholder="Nama Kost">
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="col-form-label">Alamat</label>
                                        <input type="text" name="alamat" class="form-control "
                                            placeholder="Alamat Kost">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Rt</label>
                                        <input type="text" name="rt" class="form-control " placeholder="Rt Kost">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Rw</label>
                                        <input type="text" name="rw" class="form-control " placeholder="Rw Kost">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Kelurahan</label>
                                        <input type="text" name="kelurahan" class="form-control "
                                            placeholder="Kelurahan Kost">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Kecamatan</label>
                                        <input type="char" name="kecamatan" class="form-control "
                                            placeholder="Kecamatan Kost">
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="col-form-label">Link Gmaps</label>
                                        <input type="text" name="link_maps" class="form-control "
                                            placeholder="Link Maps Kost">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Nama Pemilik</label>
                                        <input type="text" name="nama_pemilik" class="form-control "
                                            placeholder="Nama Pemilik Kost">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Nomer Hp</label>
                                        <input type="text" name="no_hp" class="form-control "
                                            placeholder="6289607765169">
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Jenis Kost</label>
                                        <select name="jenis_kost" class="form-control" required>
                                            <option>--Putra/Putri--</option>
                                            <option value="Putra">Putra</option>
                                            <option value="Putri">Putri</option>
                                            <option value="Campur">Campur</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Harga Kamar</label>
                                        <input type="number" name="harga" class="form-control "
                                            placeholder="Rp. / Bulan">
                                    </div>
                                    <div class="col-sm-12">
                                        <label class="col-form-label">Jarak Ke UNIVERSITAS BINA SARANA
                                            INFORMATIKA</label>
                                        <input type="int" name="jarak_ubsi" class="form-control" placeholder="  KM">
                                    </div>

                                    <div class="col-12 mt-3">
                                        <label class="col-form-label">Fasilitas Umum</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Ruang Tamu</label>
                                        <select name="ruang_tamu" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Ruang Cuci</label>
                                        <select name="ruang_cuci" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Ruang Jemur</label>
                                        <select name="ruang_jemur" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Ruang Keluarga</label>
                                        <select name="ruang_keluarga" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Ruang Makan</label>
                                        <select name="ruang_makan" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Ruang Santai</label>
                                        <select name="ruang_santai" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Dapur</label>
                                        <select name="dapur" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Kulkas</label>
                                        <select name="kulkas" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>


                                    <div class="col-12 mt-3">
                                        <label class="col-form-label">Fasilitas Kamar</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Luas Kamar</label>
                                        <input type="text" name="ukuran" class="form-control "
                                            placeholder="Contoh 3 x 4">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Kasur</label>
                                        <select name="kasur" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Meja</label>
                                        <select name="meja" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Bantal</label>
                                        <select name="bantal" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Lemari Baju</label>
                                        <select name="lemari_baju" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Kursi</label>
                                        <select name="kursi" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Ventilasi</label>
                                        <select name="ventilasi" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jendela</label>
                                        <select name="jendela" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Ac</label>
                                        <select name="ac" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">listrik</label>
                                        <select name="listrik" class="form-control" required>
                                            <option>--Termasuk/Tidak--</option>
                                            <option value="1">Termasuk</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label class="col-form-label">Fasilitas Kamar Mandi</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Ember</label>
                                        <select name="ember" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Toilet</label>
                                        <select name="toilet" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Tipe Kamar Mandi</label>
                                        <select name="tipe" class="form-control" required>
                                            <option>--Dalam / Luar--</option>
                                            <option value="1">Dalam</option>
                                            <option value="2">Luar</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Bak Mandi</label>
                                        <select name="bak_mandi" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Shower</label>
                                        <select name="shower" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label class="col-form-label">Fasilitas Parkir</label>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Parkir Motor</label>
                                        <select name="parkir_motor" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Parkir Mobil</label>
                                        <select name="parkir_mobil" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4">
                                        <label class="col-form-label">Parkir Sepeda</label>
                                        <select name="parkir_sepeda" class="form-control" required>
                                            <option>--Ada / Tidak--</option>
                                            <option value="1">Ada</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-3">
                                        <label class="col-form-label">Peraturan Kost</label>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Tamu</label>
                                        <select name="tamu" class="form-control" required>
                                            <option>--Boleh / Tidak--</option>
                                            <option value="1">Boleh</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Penghuni</label>
                                        <select name="penghuni" class="form-control" required>
                                            <option>--Pilih Jumlah--</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">Lebih</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Pasutri</label>
                                        <select name="pasutri" class="form-control" required>
                                            <option>--Boleh / Tidak--</option>
                                            <option value="1">Boleh</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Bawa Anak</label>
                                        <select name="bawa_anak" class="form-control" required>
                                            <option>--Boleh / Tidak--</option>
                                            <option value="1">Boleh</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Akses 24 Jam</label>
                                        <select name="akses" class="form-control" required>
                                            <option>--Boleh / Tidak--</option>
                                            <option value="1">Boleh</option>
                                            <option value="2">Tidak</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label class="col-form-label">Deskripsi Tambahan</label>
                                        <textarea name="deskripsi_tambahan" class="form-control  "
                                            id="deskripsi_tambahan" rows="4"
                                            placeholder="Tulis deskripsi tambahan disini"></textarea>
                                    </div>
                                </div>

                            </div>



                            <span id="image">
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6 col-12 mt-2">
                                            <label class="col-form-label">Foto Kamar</label>
                                            <input type="file" class="form-control " name="foto_kost" required>
                                        </div>

                                    </div>
                                </div>
                            </span>
                            <span id="image">
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-6 col-12">
                                            <label class="col-form-label">Foto Kost</label>
                                            <input type="file" class="form-control " name="foto_kamar" required>
                                        </div>

                                    </div>
                                </div>
                            </span>
                            <div class="form-group row ">
                                <div class="col-sm-10 mt-2">
                                    <button type="submit" class="btn btn-primary">Tambah Kosan</button>
                                    <a href="<?= base_url('datakamar') ?>" class="btn btn-warning">Batal</a>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>