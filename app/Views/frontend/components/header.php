<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-default header-top-borders border-bottom-0">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                        <span class="pl-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> <?= $config->address ?></span>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2">
                                        <a href="tel:<?= $config->phone_number ?>"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> <?= $config->phone_number ?></a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 pr-1 d-none d-md-inline-flex">
                                        <a href="mailto:<?= $config->email ?>"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> <?= $config->email ?></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="demo-medical.html">
                                <img alt="<?= $config->name ?>" width="143" height="40" src="<?= base_url('assets/images/logo/' . $config->image_logo) ?>">
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
                                            <a class="nav-link active" href="demo-medical.html">
                                                Home
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link" href="demo-medical-about-us.html">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-full-color dropdown-secondary">
                                            <a class="nav-link dropdown-toggle" class="dropdown-toggle" href="demo-medical-departments.html">
                                                Departments
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="demo-medical-departments-detail.html">Cardiology</a></li>
                                                <li><a class="dropdown-item" href="demo-medical-departments-detail.html">Gastroenterology</a></li>
                                                <li><a class="dropdown-item" href="demo-medical-departments-detail.html">Pulmonology</a></li>
                                                <li><a class="dropdown-item" href="demo-medical-departments-detail.html">Dental</a></li>
                                                <li><a class="dropdown-item" href="demo-medical-departments-detail.html">Gynecology</a></li>
                                                <li><a class="dropdown-item" href="demo-medical-departments-detail.html">Hepatology</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link" href="demo-medical-doctors.html">
                                                Doctors
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link" href="demo-medical-resources.html">
                                                Resources
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link" href="demo-medical-insurance.html">
                                                Insurance
                                            </a>
                                        </li>
                                        <li class="dropdown-full-color dropdown-secondary">
                                            <a class="nav-link" href="demo-medical-contact.html">
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