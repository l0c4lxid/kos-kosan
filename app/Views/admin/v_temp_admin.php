<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Yayasan Peduli Kasih KNDJH Membantu Bersama Meraih Berkah">
    <meta name="keywords" content="KNDJH,Yayasan Peduli Kasih KNDJH, Kita Bisa, Bantuan Anak Yatim">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard Pemilik</title>
    <link rel="apple-touch-icon" href="assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('') ?>logo/kndjh-logo.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('') ?>assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/pickers/pickadate/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/vendors/css/forms/select/select2.min.css">

    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/vendors/css/extensions/jquery.rateyo.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/pages/faq.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url('') ?>assets/css/pages/users.css">
    <link rel="stylesheet" type="text/css"
        href="<?= base_url('') ?>assets/css/plugins/extensions/ext-component-ratings.css">
    <!-- END: Page CSS-->


    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- BEGIN: Custom CSS-->

    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->


<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static  "
    data-open="hover" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>

    <?php
    if ($navigasi) {
        echo view($navigasi);
    }
    ?>
    <!-- END: Header-->


    <!-- BEGIN: Sidebar Menu-->

    <?php
    if ($sidebar) {
        echo view($sidebar);
    }
    ?>
    <!-- END: Sidebar Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-body">
                <?php
                if ($page) {
                    echo view($page);
                }
                ?>



            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0">
            <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2023<a
                    class="text-bold-800 grey darken-2" href="#" target="_blank"></a>All rights Reserved</span>
            <span class="float-md-right d-none d-md-block">Build with<i class="feather icon-heart pink"></i>
                <button class="btn btn-primary btn-icon scroll-top" type="button"><i
                        class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->



    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url('') ?>assets/vendors/js/vendors.min.js"></script>
    <script src="<?= base_url('') ?>assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url('') ?>assets/vendors/js/ui/prism.min.js"></script>
    <script src="<?= base_url('') ?>assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?= base_url('') ?>assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?= base_url('') ?>assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="<?= base_url('') ?>assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?= base_url('') ?>assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url('') ?>assets/js/core/app-menu.js"></script>
    <script src="<?= base_url('') ?>assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url('') ?>assets/js/scripts/datatables/datatable.js"></script>
    <script src="<?= base_url('') ?>assets/js/scripts/pages/user-profile.js"></script>
    <script src="<?= base_url('') ?>assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
    <script src=" <?= base_url('') ?>assets/js/scripts/extensions/ext-component-ratings.js "></script>
    <script src=" <?= base_url('') ?>assets/vendors/js/extensions/jquery.rateyo.min.js "></script>
    <script src="<?= base_url('') ?>assets/js/scripts/forms/select/form-select2.js"></script>
    <!-- END: Page JS-->





</body>
<!-- END: Body-->

</html>