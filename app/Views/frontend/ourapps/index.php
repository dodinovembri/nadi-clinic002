<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/components/styles') ?>
    <title><?= $config->title ?></title>
</head>

<body>

    <body>
        <!--preloader start-->
        <?= $this->include('frontend/components/preloader') ?>

        <div class="main-wrapper">
            <?= $this->include('frontend/components/header') ?>

            <section class="hero-it-solution hero-nine-bg ptb-80" style="background: url(<?= base_url('assets/images/hero/' . $config->hero_background_image) ?>)no-repeat center center">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 col-md-12">
                            <div class="section-heading pt-60">
                                <h3><?= ucwords($config_menu->our_app_category) ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="integration-wrapper position-relative w-100">
                                <ul class="integration-list list-unstyled mb-0">
                                    <?php foreach ($app_types as $key => $value) { ?>
                                        <li>
                                            <a href="<?= base_url('our-apps/show/' . $value->id) ?>">
                                                <div class="single-integration">
                                                    <img src="<?= base_url('assets/images/app_types/' . $value->image) ?>" alt="integration" class="img-fluid">
                                                    <h6 class="mb-0 mt-4"><?= $value->name ?></h6>
                                                </div>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?= $this->include('frontend/components/footer') ?>
        </div>
        <!-- scripts -->
        <?= $this->include('frontend/components/scripts') ?>
    </body>

</html>