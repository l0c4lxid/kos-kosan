<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item">
                <a class="navbar-brand" href="/">
                    <div class="brand-logo"></div>
                    <h2>Kost Kita</h2>
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav ">

                        <li class="mr-2 d-none d-xl-block">
                            <a href="/" style="font-size: 15px;"><i class="feather icon-home"></i> Home ></a>
                            <a href="#" style="font-size: 15px;">
                                <?= $value['nama_kost'] ?>
                            </a>
                            <a href="#" style="font-size: 15px;">
                                |
                                <?= $value['nama_pemilik'] ?>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item">
                        <a class="mr-2 nav-link nav-link-label" href="https://wa.me/6289607765169">
                            <i class="feather icon-phone"></i> <span class=" mr-2">Hubungi Kami</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav> <!-- END: Header-->