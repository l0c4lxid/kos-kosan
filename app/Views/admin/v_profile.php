<!-- account setting page start -->
<section id="page-account-settings">
    <div class="row">
        <!-- left menu section -->
        <div class="col-md-3 mb-2 mb-md-0">
            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                <li class="nav-item">
                    <a class="nav-link d-flex py-75 active" id="profile" data-toggle="pill" href="#data-profile"
                        aria-expanded="true">
                        <i class="feather icon-user mr-50 font-medium-3"></i>
                        Ubah Password
                    </a>
                </li>
            </ul>
        </div>
        <!-- right content section -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="data-profile" aria-labelledby="profile"
                                aria-expanded="true">
                                <form action="<?= base_url('/ubahpassword') ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <?php foreach ($akun as $user): ?>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="username">Username</label>
                                                        <input type="text" name="username" class="form-control"
                                                            value="<?= $user['username'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label for="password">Password</label>
                                                        <input type="password" name="password" class="form-control"
                                                            value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- ... other form fields ... -->
                                        </div>
                                    <?php endforeach; ?>

                                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-start">
                                        <button type="submit"
                                            class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Simpan</button>
                                        <a href="/admin" class="btn btn-outline-warning">batal</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: Content-->