<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-light navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ficon feather icon-menu"></i></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                class="ficon feather icon-maximize"></i></a></li>

                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">

                            <span>
                                <img class="round" src="<?= base_url('profile.png') ?>" alt="avatar" height="40"
                                    width="40">
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="<?= base_url('profile') ?>"><i
                                    class="feather icon-user"></i>Profile</a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url('login/logout') ?>" onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                                <i class="feather icon-power"></i> Logout
                                <form id="logout-form" action="<?= base_url('login/logout') ?>" method="POST"
                                    class="d-none">
                                </form>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>