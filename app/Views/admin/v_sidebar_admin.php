<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="<?= base_url('#') ?>">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">Kost Ubsi</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item <?= $judul == 'Dashboard' ? 'active' : '' ?>">
                <a href="/admin"><i class="feather icon-home"></i><span class="menu-title"
                        data-i18n="Dashboard">Dashboard</span>
                </a>
            </li>
            <li class="nav-item <?= $judul == 'Kamar' ? 'active' : '' ?>">
                <a href="#"><i class="feather icon-square"></i><span class="menu-title"
                        data-i18n="Campaign">Kamar</span></a>
                <ul class="menu-content">
                    <li class="" <?= $subjudul == 'DataKamar' ? 'active' : '' ?>>
                        <a href="<?= base_url('datakamar') ?>"><i></i><span class="menu-item"
                                data-i18n="Data Kamar">Data Kamar</span></a>
                    </li>

                    <li class="" <?= $subjudul == 'TambahDataKamar' ? 'active' : '' ?>>
                        <a href="<?= base_url('tambahdatakamar') ?>"><i></i><span class="menu-item"
                                data-i18n="Tambah">Tambah Kamar</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>