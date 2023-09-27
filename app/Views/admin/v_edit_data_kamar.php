<section id="basic-vertical-layouts">
    <div class="row match-height">
        <div class="col-md-12 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Form Tambah Kosan</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="<?= base_url('updatedatakamar/' . $value['id_kosan']) ?>" method="POST"
                            enctype="multipart/form-data">
                            <div class="form-body ">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <label class="col-form-label">Nama Kamar</label>
                                        <input type="text" class="form-control " name="nama_kamar"
                                            placeholder="Nama Kamar" value="<?= $value['nama_kosan'] ?>"
                                            autocomplete="off">
                                        <small style="color: red">*Tanpa nama provinsi/kota/kabupaten</small>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Kategori</label>
                                        <select name="kategori" class="form-control " required>
                                            <option value="">--Kategori Kamar--</option>
                                            <option value="Kost">Kost</option>
                                            <option value="Apartment">Apartment</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Jenis Kamar</label>
                                        <select name="jenis_kamar" class="form-control " required>
                                            <option value="">--Putra/Putri--</option>
                                            <option value="Putra">Putra</option>
                                            <option value="Putri">Putri</option>
                                            <option value="Campur">Campur</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Luas Kamar</label>
                                        <input type="text" name="luas_kamar" class="form-control "
                                            value="<?= $value['luas_kosan'] ?>">
                                    </div>
                                    <div class="col-sm-3">
                                        <label class="col-form-label">Harga Kamar</label>
                                        <input type="number" value='<?= $value['biaya_kosan'] ?>' name="harga_kamar"
                                            class="form-control ">
                                    </div>


                                    <div class="col-6">
                                        <label class="col-form-label">Alamat Lengkap Kos</label>
                                        <textarea value='<?= $value['alamat_kosan'] ?>' name="alamat"
                                            class="form-control" id="alamat"
                                            rows="4"><?= $value['alamat_kosan'] ?></textarea>
                                    </div>
                                    <div class="col-sm-6">
                                        <label class="col-form-label">Deskripsi</label>
                                        <textarea name="desc" class="form-control"
                                            rows="4"><?= $value['deskripsi'] ?></textarea>
                                    </div>

                                </div>
                                <span id="image">
                                    <div class="form-group ">
                                        <div class="row">
                                            <div class="col-lg-6 col-xl-6 col-10">
                                                <label class="col-form-label">Foto Kamar</label>
                                                <input value='<?= $value['foto_kosan'] ?>' type="file"
                                                    class="form-control " name="foto" required>
                                            </div>

                                        </div>
                                    </div>
                                </span>


                                <div class="form-group row ">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary">Simpan Kosan</button>
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