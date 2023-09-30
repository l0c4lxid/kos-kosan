<section id="basic-datatable">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data List Kamar
                        <a href="<?= base_url('tambahdatakamar') ?>" class="btn btn-primary btn-sm">Tambah
                            Kamar</a>
                    </h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th width="1%">No</th>
                                        <th class="text-nowrap">Nama Kost</th>
                                        <th class="text-nowrap">Alamat Kamar</th>
                                        <th class="text-nowrap">Nama Pemilik</th>
                                        <th class="text-nowrap">No HP</th>
                                        <th class="text-nowrap">Jenis Kost</th>
                                        <th class="text-nowrap">Harga Kamar</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <?php $no = 1;
                                foreach ($kamar as $value): ?>
                                    <tr>
                                        <td>
                                            <?= $no++ ?>
                                        </td>

                                        <td>
                                            <?= $value->nama_kost; ?>
                                        </td>
                                        <td>
                                            <?= $value->alamat; ?>,
                                            RT.
                                            <?= $value->rt; ?>,
                                            RW.
                                            <?= $value->rw; ?>,
                                            Kel.
                                            <?= $value->kelurahan; ?>,
                                            Kec.
                                            <?= $value->kecamatan; ?>.
                                        </td>
                                        <td>
                                            <?= $value->nama_pemilik; ?>
                                        </td>
                                        <td>
                                            <?= $value->no_hp; ?>
                                        </td>
                                        <td>
                                            <?= $value->jenis_kost; ?>
                                        </td>
                                        <td class="text-left">Rp.
                                            <?= $value->harga; ?>

                                        </td>
                                        <td class="text-center">
                                            <a href="<?= base_url('detail/' . $value->id_kost) ?>" target="_blank"
                                                class="btn btn-info btn-sm"><i class="feather icon-eye"></i>Show</a>

                                            <a href="<?= base_url('editdatakamar/' . $value->id_kost) ?>"
                                                class="btn btn-warning btn-sm"><i class="feather icon-edit">
                                                    Edit</i></a>
                                            <a href="<?= base_url('hapusdatakamar/' . $value->id_kost) ?>"
                                                class="btn btn-danger btn-sm"><i class="feather icon-trash">Hapus</i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>