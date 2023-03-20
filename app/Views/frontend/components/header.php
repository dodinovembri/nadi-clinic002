<!--header start-->
<?php
$uri = new \CodeIgniter\HTTP\URI(current_url());
$segment = $uri->getSegment(2);
?>
<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{url('/')}}">
                                <img alt="Porto" width="160" height="40" src="{{asset('assets/images/logo.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a href="#home" data-hash data-hash-offset="68" class="nav-link">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a href="#about_us" data-hash data-hash-offset="68" class="nav-link">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a href="#department" data-hash data-hash-offset="68" class="nav-link">
                                                Layanan
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a href="#doctor" data-hash data-hash-offset="68" class="nav-link">
                                                Doctors
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a href="#biaya" data-hash data-hash-offset="68" class="nav-link">
                                                Estimasi Biaya
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a href="#kamar" data-hash data-hash-offset="68" class="nav-link">
                                                Kamar
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a href="#contact" data-hash data-hash-offset="68" class="nav-link">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>