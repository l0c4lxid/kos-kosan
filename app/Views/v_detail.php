<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>
        <?= $judul ?> |
        <?= $value['nama_kosan'] ?>
    </title>

    <link rel="apple-touch-icon" href="<?= base_url('') ?>assets/images/logo/papikos_logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('') ?>assets/images/logo/papikos_logo.png">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('') ?>assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/pages/banner.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/plugins/extensions/swiper.css">
    <style>
        .swiper {
            max-height: 455px !important;
        }

        .alerts {
            display: none;
        }
    </style>
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" href="<?= base_url('') ?>ctrl/front/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url('') ?>ctrl/front/css/jquery.timepicker.css">
    <link rel="stylesheet" href="<?= base_url('') ?>ctrl/front/css/custom.css">

    <!-- END: Custom CSS-->


    <script src="<?= base_url('') ?>js/share.js"></script>

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
    ?> <!-- END: Header-->

    <!-- BEGIN: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <h4 class="card-title">
                            <a href="/" style="font-size: 15px;"><i class="feather icon-home"></i> Home ></a>
                            <a href="" style="font-size: 15px;">
                                <?= $value['nama_kosan'] ?>
                            </a>
                            <a href="" style="font-size: 15px;">
                                <?= $value['alamat_kosan'] ?>
                            </a>
                        </h4>
                    </div>
                    <div class="col-xl-8 col-lg-12">
                        <div class="card ">
                            <div class="card-content">
                                <div class="card-body ">
                                    <div class="swiper-navigations swiper-container swiper">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid"
                                                    src="<?= base_url('foto/' . $value['foto_kosan']) ?>" alt="banner">
                                            </div>
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-4">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body ">
                                    <img src="https://cdn.pixabay.com/photo/2018/08/28/13/29/avatar-3637561_1280.png"
                                        width="50px" height="50px" class="rounded">
                                    <span class="font-weight-bold" style="font-size: 20px; color:black;">Arfiyan Wahyu
                                        Pratama</span>
                                    <p class="ml-5" style="font-size: 10px; margin-top:-3%">Pemilik Kos - Aktif Sejak
                                        September 2023 </p>
                                    <span class="btn btn-outline-primary btn-sm">
                                        0 Transaksi Berhasil</span>
                                    <span class="btn btn-outline-info btn-sm"> Total 1 Pelanggan</span>
                                    <p class="mt-1"> <i class="feather icon-phone-call"></i> 0822******** </p>

                                    <p class="mt-2" style="font-size: 12px">Hubungi pemilik kos untuk menanyakan lebih
                                        detail terkait kamar ini.</p>
                                    <button class="btn btn-outline-black">Kirim pesan ke pemilik kos</button>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>
                                    <?= $value['nama_kosan'] ?>
                                </h3>
                                <button class="btn btn-outline-black btn-sm">
                                    <span style="font-size: 12px; font-weight:bold;">
                                        <?= $value['jenis_kosan'] ?>
                                    </span>
                                </button>
                                <br>
                                <h4 class='mr-2 mt-2'>
                                    <i class="feather icon-map"></i> Lokasi
                                </h4>

                                <hr>

                                <h3 style="font-weight: bold">Fasilitas Umum</h3>
                                <p style="font-size: 13px">
                                <ol>
                                    <li>Tidak Termasuk Listrik</li>
                                    <li>Tidak Ada Minimum Pembayaran</li>
                                    <li>Diskon Jutaan</li>
                                </ol>
                                <hr style="border-top: 1px dashed ">
                                </p>
                                <h5 class="mt-1" style="font-weight: bold">Fasilitas Kamar</h5>
                                kasur lemari ventilasi bantal jendela
                                <h5 class="mt-1" style="font-weight: bold">Fasilitas Kamar Mandi</h5>
                                mandi luar ember
                                <h5 class="mt-1" style="font-weight: bold">Aturan Kost</h5>
                                menginap maksimal pasutri bawa anak

                                <!-- <h5 class="mt-1" style="font-weight: bold">Fasilitas yang kamu dapatkan</h5>
                                <div class="row">
                                    <p style="font-size: 13px">
                                    <div class="col-md-6">

                                        1 kasur springbad, 1 bantal, 1 selimut, 1 lemari, 1 meja belajar <br>


                                        Kamar Mandi dalam dan ada Shower <br>
                                    </div>
                                    <div class="col-md-6">

                                        dapur umum <br>


                                        Ada <br>
                                    </div>
                                    </p>
                                </div>

                                <h5 class="mt-1" style="font-weight: bold">Fasilitas umum</h5>
                                <div class="d-flex justify-content-between">
                                    <p style="font-size: 13px">
                                        Lingkungan Mahasiswa <br>
                                    </p>
                                </div>

                                <h5 class="mt-1" style="font-weight: bold">Keterangan Lain</h5>
                                -

                                <h5 class="mt-1" style="font-weight: bold">Keterangan Biaya</h5>
                                -

                                <h5 class="mt-1" style="font-weight: bold">Peraturan selama ngekos</h5>
                                -

                                <h5 class="mt-1" style="font-weight: bold">Lokasi</h5>
                                Jln Melati no 3 jakarta pusat <br>
                                <small style="text-decoration:underline"> Gambir, Kota jakarta pusat, Dki jakarta
                                </small>
                                <hr>
                                <h3 style="font-weight: bold">Reviews</h3> <br> -->
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php
    if ($footer) {
        echo view($footer);
    }
    ?>
    </div>

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

    <!-- <nav class="navbar navbar-bottom navbar-dark bg-dark navbar-expand d-lg-none d-xl-none fixed-bottom">
        <ul class="navbar-nav nav-justified w-100">
            <li class="nav-item">
                <a href="/" class="nav-link text-white"><i class="feather icon-home"></i>Home</a></a>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('') ?>show-all-room" class="nav-link text-white"><i
                        class="feather icon-calendar"></i>Booking</a></a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-white"> <i class="feather icon-book"></i>Ketentuan</a>
            </li>
        </ul>
    </nav> -->
    <!-- END: Footer-->



    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url('') ?>assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url('') ?>assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url('') ?>assets/vendors/js/extensions/swiper.min.js"></script>
    <script src="<?= base_url('') ?>assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('') ?>assets/js/core/app-menu.js"></script>
    <script src="<?= base_url('') ?>assets/js/core/app.js"></script>
    <script src="<?= base_url('') ?>assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url('') ?>assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <script src="<?= base_url('') ?>assets/js/scripts/extensions/swiper.js"></script>
    <script src="<?= base_url('') ?>ctrl/front/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url('') ?>ctrl/front/js/jquery.timepicker.min.js"></script>
    <script src="<?= base_url('') ?>ctrl/front/js/custom.js"></script>
    <script src="<?= base_url('') ?>assets/js/scripts/forms/select/form-select2.js"></script>

    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>