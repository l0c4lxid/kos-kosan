<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    <title>
        <?= $judul ?> |
        <?= $value['nama_kost'] ?>
    </title>
    <!-- 
    <link rel="apple-touch-icon" href="<?= base_url('') ?>assets/images/logo/papikos_logo.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('') ?>assets/images/logo/papikos_logo.png"> -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/extensions/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Tautkan ke Swiper.js CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- Tautkan ke Swiper.js -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
    <div class=" content">

        <div class="content-wrapper">

            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <h4 class="card-title">
                            <a href="#" style="font-size: 15px; font-color: #ffffff"><i class="feather icon-home"></i>
                                Home ></a>
                            <a href="" style="font-size: 15px;">
                                <?= $value['nama_kost'] ?>
                            </a>
                            <a href="" style="font-size: 15px;">
                                |
                                <?= $value['nama_pemilik'] ?>
                            </a>
                        </h4>
                    </div>
                    <!-- Kode HTML untuk Swiper -->
                    <div class="col-xl-8 col-lg-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img class="img-fluid"
                                                    src="<?= base_url('foto/' . $value['foto_kost']) ?>"
                                                    alt="Kost Foto">
                                            </div>
                                            <div class="swiper-slide">
                                                <img class="img-fluid"
                                                    src="<?= base_url('foto/' . $value['foto_kamar']) ?>"
                                                    alt="Kamar Foto">
                                            </div>
                                            <!-- Tambahkan slide lainnya sesuai kebutuhan -->
                                        </div>
                                        <!-- Tambahkan tombol navigasi swiper jika diperlukan -->
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
                                    <span class="font-weight-bold" style="font-size: 20px; color:black;">
                                        <?= $value['nama_kost'] ?>
                                    </span>
                                    <p class="ml-5" style="font-size: 10px; margin-top:-3%">Pemilik Kos</p>
                                    <!-- <span class="btn btn-outline-primary btn-sm">
                                        0 Transaksi Berhasil</span> -->
                                    <!-- <span class="btn btn-outline-info btn-sm"> Total 1 Pelanggan</span> -->
                                    <!-- <p class="mt-1"> <i class="feather icon-phone-call"></i> 0822******** </p> -->

                                    <p class="mt-2" style="font-size: 12px">Hubungi pemilik kos untuk menanyakan lebih
                                        detail terkait kamar ini.</p>
                                    <button class="btn btn-outline-black" id="sendMessageBtn">Kirim pesan ke pemilik
                                        kos</button>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3>
                                    <?= $value['nama_kost'] ?>
                                </h3>
                                <button class="btn btn-outline-black btn-sm mt-2">
                                    <span style="font-size: 12px; font-weight:bold;">
                                        <?= $value['jenis_kost'] ?>
                                    </span>
                                </button>
                                <br>
                                <h4 class='mr-2 mt-2'>
                                    <i class="feather icon-map"></i> Lokasi :
                                    <?= $value['alamat'] ?> Rt
                                    <?= $value['rt'] ?>, Rw
                                    <?= $value['rw'] ?>,
                                    <?= $value['kelurahan'] ?>,
                                    <?= $value['kecamatan'] ?>, Sleman, Yogyakarta.
                                </h4>
                                <h5>Jarak ke UBSI :
                                    <?= $value['jarak_ubsi'] ?> KM
                                </h5>
                                <hr style="border-top: 1px dashed ">

                                <div class="row">
                                    <div class="col-lg-3">
                                        <h3 class="mt-1" style="font-weight: bold">Fasilitas Umum</h3>
                                        <p style="font-size: 13px">
                                        <ol>
                                            <?php if ($value['ruang_tamu'] == 1): ?>
                                                <li>
                                                    Ruang Tamu
                                                </li>
                                            <?php endif; ?>

                                            <?php if ($value['ruang_cuci'] == 1): ?>
                                                <li>
                                                    Ruang Cuci
                                                </li>
                                            <?php endif; ?>

                                            <?php if ($value['ruang_jemur'] == 1): ?>
                                                <li>
                                                    Ruang Jemur
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['ruang_keluarga'] == 1): ?>
                                                <li>
                                                    Ruang Keluarga
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['ruang_makan'] == 1): ?>
                                                <li>
                                                    Ruang Makan
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['ruang_santai'] == 1): ?>
                                                <li>
                                                    Ruang Santai
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['dapur'] == 1): ?>
                                                <li>
                                                    Dapur
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['dapur'] == 1): ?>
                                                <li>
                                                    Kulkas
                                                </li>
                                            <?php endif; ?>
                                        </ol>
                                        <!-- <hr style="border-top: 1px dashed "> -->
                                        </p>
                                    </div>
                                    <div class="col-lg-3">
                                        <h3 class="mt-1" style="font-weight: bold">Fasilitas Kamar</h3>
                                        <ul>

                                            <li>
                                                <i class="fa-solid fa-cube"></i> Ukuran Kamar Kost
                                                <?= $value['ukuran'] ?> M
                                            </li>


                                            <?php if ($value['kasur'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-bed"></i> Kasur
                                                </li>
                                            <?php endif; ?>

                                            <?php if ($value['meja'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-square"></i> Meja
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['bantal'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-mattress-pillow"></i> Bantal
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['lemari_baju'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-person-chalkboard"></i> Lemari Baju
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['kursi'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-chair"></i> Kursi
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['ventilasi'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-kitchen-set"></i> Dapur
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['jendela'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-person-through-window"></i> Jendela
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['ac'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-wind"></i> Ac
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['listrik'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-bolt"></i> Listrik
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>

                                    <div class="col-lg-3">
                                        <h3 class="mt-1" style="font-weight: bold">Fasilitas Kamar Mandi</h3>
                                        <ul>
                                            <?php if ($value['ember'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-bucket  "></i> Ember
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['toilet'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-toilet  fa-lg "></i></i> toilet
                                                </li>
                                            <?php endif; ?>
                                            <?php
                                            if ($value['tipe'] == 1):
                                                ?>
                                                <li>
                                                    <i class="fa-solid fa-toilet-paper"></i> di dalam kamar
                                                </li>
                                                <?php
                                            elseif ($value['tipe'] == 2):
                                                ?>
                                                <li>
                                                    <i class="fa-solid fa-toilet-paper-slash"></i> di luar kamar
                                                </li>
                                                <?php
                                            endif;
                                            ?>

                                            <?php if ($value['bak_mandi'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-bath  fa-lg"></i></i></i>
                                                    Bak Mandi
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['shower'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-shower "></i> Shower
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-3">
                                        <h3 class="mt-1" style="font-weight: bold">Aturan Kost</h3>
                                        <ul>
                                            <?php if ($value['tamu'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-people-robbery"></i> Bawa Tamu
                                                </li>
                                            <?php endif; ?>
                                            <li>
                                                <i class="fa-solid fa-people-roof"></i> Penghuni maksimal
                                                <?= $value['penghuni'] ?>
                                            </li>
                                            <?php if ($value['pasutri'] == 1): ?>
                                                <li>
                                                    <i class="fa-regular fa-id-card"></i> Pasutri Diperbolehkan
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['bawa_anak'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-children"></i> Boleh Bawa Anak
                                                </li>
                                            <?php endif; ?>
                                            <?php if ($value['akses'] == 1): ?>
                                                <li>
                                                    <i class="fa-solid fa-eye"></i> 24 Jam Akses
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                        <hr style="border-top: 1px dashed ">

                                        <h3 class="mt-1" style="font-weight: bold">Deskripsi Tambahan</h3>
                                        <p class="">
                                            <?= $value['deskripsi_tambahan'] ?>
                                        </p>
                                    </div>
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

    <!-- Kode JavaScript untuk menginisialisasi Swiper.js -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            // Atur pengaturan Swiper.js sesuai kebutuhan, misalnya, loop, autoplay, dsb.
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>

    <script>
        // Mengambil elemen tombol berdasarkan ID
        var sendMessageBtn = document.getElementById("sendMessageBtn");

        // Data dari PHP (sesuaikan dengan struktur data yang Anda miliki)
        var namaKost = "<?= $value['nama_kost'] ?>";
        var namaPemilik = "<?= $value['nama_pemilik'] ?>";

        // Menambahkan event listener untuk menanggapi klik tombol
        sendMessageBtn.addEventListener("click", function () {
            // Pesan dinamis yang ingin Anda kirim
            var pesan = "Saya berminat dengan Kost " + namaKost + ", dengan nama pemilik " + namaPemilik + '.';

            // Membuka tautan WhatsApp dengan pesan dinamis di tab baru
            window.open("https://wa.me/629607765169?text=" + encodeURIComponent(pesan), "_blank");
        });
    </script>


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