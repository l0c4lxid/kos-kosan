<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Kost Ubsi
    </title>

    <link rel="apple-touch-icon" href="<?= base_url('') ?>/assets/images/logo/papikos_logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('') ?>/assets/images/logo/papikos_logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('') ?>/assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/pages/banner.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>/assets/css/plugins/extensions/swiper.css">

    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" href="<?= base_url('') ?>/ctrl/front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/ctrl/front/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?= base_url('') ?>/ctrl/front/css/custom.css">
    <style>
        .navbar-bottom {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .navbar-bottom a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
    </style>
    <!-- END: Custom CSS-->


    <script src="<?= base_url('') ?>/js/share.js"></script>

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns navbar-floating footer-static" data-open="hover"
    data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->

    <?php
    if ($navigasi) {
        echo view($navigasi);
    }
    ?>
    <!-- END: Header -->

    <!-- BEGIN: Main Menu-->


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section id="banner-search">
                    <div class="row">
                        <div class="col-12 mt-auto mb-4">
                            <div class="card banner-bg white">
                                <div class="card-content">
                                    <div id="home" class="card-body p-sm-12 p-2">
                                        <h1 class="white">Mau Cari Kos ?</h1>
                                        <p class="card-text mb-2">
                                            Lebih mudah pesan dan sewa di Kost Kita.
                                        </p>
                                        <form action="<?= base_url('') ?>" method="GET">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <input type="text" name="cari" class="form-control form-control-lg"
                                                    id="searchbar"
                                                    placeholder="Masukan Nama Kos lokasi/kota/provinsi...">
                                                <div class="form-control-position">
                                                    <i class="feather icon-search px-1"></i>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                </section>
                <div id="rekomendasi" class="card-btn d-flex justify-content-between mt-auto mb-4">
                    <p style="color:black; font-size:1rem; font-weight:bold">Rekomendasi</p>
                </div>

                <div class="row match-height">
                    <?php
                    foreach ($kamar as $key => $value) { ?>
                        <div class="col-xl-3 col-md-6 col-sm-12">

                            <div class="card">
                                <div class="card-content">

                                    <a href="<?= base_url('detail/' . $value->id_kost) ?>">
                                        <img class="card-img-top img-fluid"
                                            src="<?= base_url('foto/' . $value->foto_kost) ?>" alt="Card image cap"
                                            style="max-height: 180px">
                                    </a>
                                    <div class="card-body">
                                        <a href="<?= base_url('detail/' . $value->nama_kost) ?>">
                                            <h5 style="min-height: 40px">
                                                <?= $value->nama_kost; ?>
                                            </h5>
                                            <div class="d-flex-justify-content-between">
                                                <a href="" class="btn gradient-light-primary btn-sm">
                                                    <?= $value->jenis_kost; ?>

                                                </a>
                                            </div>
                                            <p class="card-text mt-1 mb-0">
                                                <?= $value->alamat; ?>
                                                <i class="feather icon-map-pin"></i>
                                            </p>
                                            <span class="card-text"
                                                style="color: rgb(96, 93, 93);text-decoration: line-through">
                                            </span> <br>
                                            <span class="card-text" style="color: black">
                                                <?= $value->no_hp; ?>
                                            </span>
                                        </a>
                                        <div class="card-btn d-flex justify-content-between mt-2">
                                            <a href="#" class="btn gradient-light-warning text-white btn-sm">
                                                Rp.
                                                <?= $value->harga; ?>
                                            </a>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div style="text-align: center;" class="mt-1">

                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Footer-->
    <!-- <footer class="footer footer-static ">

    </footer> -->
    <?php
    if ($footer) {
        echo view($footer);
    }
    ?>
    </div>
    <nav class="navbar navbar-bottom navbar-dark bg-dark navbar-expand d-lg-none d-xl-none fixed-bottom">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="#home" class="nav-link text-white"><i class="feather icon-home"></i>Home</a></a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('') ?>/show-all-room" class="nav-link text-white"><i
                        class="feather icon-calendar"></i>Booking</a></a>
            </li>
            <li class="nav-item">
                <a href="#syarat-ketentuan" class="nav-link text-white"> <i class="feather icon-book"></i>Ketentuan</a>
            </li>
        </ul>
    </nav>
    <!-- END: Footer-->



    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url('') ?>/assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url('') ?>/assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url('') ?>/assets/vendors/js/extensions/swiper.min.js"></script>
    <script src="<?= base_url('') ?>/assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('') ?>/assets/js/core/app-menu.js"></script>
    <script src="<?= base_url('') ?>/assets/js/core/app.js"></script>
    <script src="<?= base_url('') ?>/assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url('') ?>/assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="<?= base_url('') ?>/assets/js/scripts/extensions/swiper.js"></script>
    <script src="<?= base_url('') ?>/ctrl/front/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('') ?>/ctrl/front/js/jquery.timepicker.min.js"></script>
    <script src="<?= base_url('') ?>/ctrl/front/js/custom.js"></script>
    <script src="<?= base_url('') ?>/assets/js/scripts/forms/select/form-select2.js"></script>

    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>