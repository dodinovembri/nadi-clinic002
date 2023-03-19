<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/components/styles') ?>
    <title><?= $config->title ?></title>
</head>

<body>
    <!-- preloader -->
    <?= $this->include('frontend/components/preloader') ?>
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <?= $this->include('frontend/components/header') ?>
        <!-- hero section start-->
        <section class="hero-it-solution hero-nine-bg ptb-120" style="background: url(<?= base_url('assets/images/hero/' . $config->hero_background_image) ?>)no-repeat center center">
            <div class="container">
                <div class="row align-items-center mt-5">
                    <div class="col-lg-6 col-md-10">
                        <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                            <h3 class="fw-bold display-6"><?= $config->hero_title; ?></h3>
                            <p class="lead"><?= $config->hero_subtitle; ?></p>
                            <div class="action-btn mt-5 align-items-center d-block d-sm-flex d-lg-flex d-md-flex">
                                <a href="<?= base_url('request-demo') ?>" class="btn btn-primary me-3">
                                    <?= $config_menu->tell_bussiness; ?>
                                </a>
                                <a href="<?= $config->demo_url; ?>" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn mt-3 mt-lg-0 mt-md-0 text-primary">
                                    <i class="fas fa-play text-primary border-2 border-primary"></i>
                                    <?= $config_menu->watch_video; ?>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-img position-relative mt-5 mt-lg-0">
                            <img src="<?= base_url('assets/images/hero/' . $config->hero_banner_image)  ?>" alt="hero hero-it-solution " class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero section end-->

        <!-- services start -->
        <section class="services-icon ptb-80" id="service">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="section-heading text-center">
                            <h3><?= $config->service_title ?></h3>
                            <p><?= $config->service_subtitle ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php foreach ($services as $key => $value) { ?>
                        <div class="col-lg-4 col-md-6 p-0">
                            <div class="single-service p-lg-5 p-4 text-center mt-3 border-bottom border-end">
                                <div class="service-icon icon-center">
                                    <img src="<?= base_url('assets/images/services/' . $value->image) ?>" alt="service icon" width="65" height="65" />
                                </div>
                                <div class="service-info-wrap">
                                    <h3 class="h5"><?= $value->title ?></h3>
                                    <p><?= $value->description ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- services end -->

        <!-- price start-->
        <div class="style-guide" id="pricing">

            <!--pricing section start-->
            <section class="pricing-section position-relative overflow-hidden bg-dark text-white pt-80">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-heading text-center z-5 position-relative">
                                <h4 class="h5 text-warning"><?= $config_menu->plan_pricing ?></h4>
                                <h2><?= $config->pricing_title ?></h2>
                                <p><?= $config->pricing_subtitle ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-10">
                            <div class="pricing-content-wrap mb--100 bg-white rounded-custom shadow-lg border d-fle z-10">
                                <div class="price-feature-col pricing-feature-info left-radius bg-primary-soft p-5">
                                    <ul class="list-unstyled pricing-feature-list pricing-included-list mb-0">
                                        <?php foreach ($features as $key => $value) { ?>
                                            <li class="py-1"><i class="fas fa-check-circle text-primary me-2"></i><?= $value->description ?></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="price-feature-col pricing-action-info p-5">
                                    <ul class="nav nav-pills mb-4 pricing-tab-list" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button id="pills-daily-tab" data-bs-toggle="pill" data-bs-target="#pills-daily" type="button" role="tab" aria-controls="pills-daily" aria-selected="true"><?= $config_menu->daily ?></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?= $config_menu->monthly ?></button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" class=""><?= $config_menu->yearly ?></button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade" id="pills-daily" role="tabpanel" aria-labelledby="pills-daily-tab">
                                            <h3 class="h5"><?= $config->pricing_daily_title ?></h3>
                                            <p><?= $config->pricing_daily_subtitle ?></p>
                                            <div class="pricing-price mt-5">
                                                <h3 class="h3 fw-bold"><?= $config->pricing_daily_price ?><span>/<?= $config_menu->day ?></span></h3>
                                            </div>
                                            <a href="<?= base_url('get-started') ?>" class="btn btn-primary mt-3"><?= $config_menu->day_trial ?></a>
                                        </div>
                                        <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <h3 class="h5"><?= $config->pricing_monthly_title ?></h3>
                                            <p><?= $config->pricing_monthly_subtitle ?></p>
                                            <div class="pricing-price mt-5">
                                                <h3 class="h3 fw-bold"><?= $config->pricing_monthly_price ?><span>/<?= $config_menu->month ?></span></h3>
                                            </div>
                                            <a href="<?= base_url('get-started') ?>" class="btn btn-primary mt-3"><?= $config_menu->day_trial ?></a>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <h3 class="h5"><?= $config->pricing_yearly_title ?></h3>
                                            <p><?= $config->pricing_yearly_subtitle ?></p>
                                            <div class="pricing-price mt-5">
                                                <h3 class="h3 fw-bold"><?= $config->pricing_yearly_price ?><span>/<?= $config_menu->day ?></span></h3>
                                            </div>
                                            <a href="<?= base_url('get-started') ?>" class="btn btn-primary mt-3"><?= $config_menu->day_trial ?></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning left-5"></div>
                <div class="white-space-100 bg-white w-100"></div>
            </section>
            <!--pricing section end-->

        </div>
        <!-- price end-->

        <!-- subscribe start-->
        <section class="cta-subscribe bg-dark text-white ptb-80 position-relative overflow-hidden">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="subscribe-info-wrap text-center position-relative z-2">
                            <div class="section-heading" data-aos="fade-up">
                                <h4 class="h5 text-warning"><?= $config_menu->lets_try ?></h4>
                                <h2><?= $config->subscribe_title ?></h2>
                                <p><?= $config->subscribe_subtitle ?></p>
                            </div>
                            <div class="form-block-banner mw-60 m-auto mt-5" data-aos="fade-up" data-aos-delay="50">
                                <a href="<?= base_url('contact-us') ?>" class="btn btn-primary"><?= $config_menu->contact_us ?></a>
                                <a href="<?= $config->demo_url ?>" class="text-decoration-none popup-youtube d-inline-flex align-items-center watch-now-btn ms-lg-3 ms-md-3 mt-3 mt-lg-0"> <i class="fas fa-play"></i><?= $config_menu->watch_video ?></a>
                            </div>
                            <ul class="nav justify-content-center subscribe-feature-list mt-4" data-aos="fade-up" data-aos-delay="100">
                                <?php foreach ($features as $key => $value) { ?>
                                    <li class="nav-item">
                                        <span><i class="far fa-check-circle text-primary me-2"></i><?= $value->description ?></span>
                                    </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light left-5"></div>
                <div class="bg-circle rounded-circle circle-shape-1 position-absolute bg-warning right-5"></div>
            </div>
        </section> <!-- subscribe end-->

        <!-- brand start -->
        <section class="brand-logo ptb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-10">
                        <div class="section-heading text-center">
                            <h3><?= $config->brand_title ?></h3>
                            <p><?= $config->brand_subtitle ?></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <ul class="brand-logo-grid list-unstyled">
                        <?php foreach ($brands as $key => $value) { ?>
                            <li><img src="<?= base_url('assets/images/brands/' . $value->image) ?>" alt="brand logo" /></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </section>
        <!-- brand end -->

        <?= $this->include('frontend/components/footer') ?>
    </div>
    <!-- scripts -->
    <?= $this->include('frontend/components/scripts') ?>
</body>

</html>