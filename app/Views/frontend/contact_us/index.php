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
        
        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h1 class="display-5 fw-bold"><?= ucfirst($config_menu->contact_us) ?></h1>
                        <p class="lead"><?= ucwords($config->contact_us_subtitle) ?></p>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--contact us promo section start-->
        <section class="contact-promo ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fad fa-comment-alt-lines fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5><?= ucwords($config_menu->chat_us) ?></h5>
                                <p>
                                    <?= ucwords($config->chat_us_description) ?>
                                </p>
                            </div>
                            <a href="mailto:hellothemetags@gmail.com" class="btn btn-link mt-auto"><?= ucwords($config_menu->chat_us) ?></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fad fa-envelope fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5><?= ucwords($config_menu->email_us) ?></h5>
                                <p>
                                <?= ucwords($config->email_us_description) ?>
                                </p>
                            </div>
                            <a href="mailto:hellothemetags@gmail.com" class="btn btn-primary mt-auto"><?= ucwords($config_menu->email_us) ?></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-5 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <span class="fad fa-phone fa-3x text-primary"></span>
                            <div class="contact-promo-info mb-4">
                                <h5><?= ucwords($config_menu->call_us) ?></h5>
                                <p>
                                <?= ucwords($config->call_us_description) ?>
                                </p>
                            </div>
                            <a href="tel:<?= $config->phone_number ?>" class="btn btn-link mt-auto"><?= $config->phone_number ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us promo section end-->


        <?= $this->include('frontend/components/footer') ?>
    </div>
    <!-- scripts -->
    <?= $this->include('frontend/components/scripts') ?>
</body>

</html>