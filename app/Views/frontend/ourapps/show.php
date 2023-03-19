<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/components/styles') ?>
    <title><?= $config->title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/frontend/apps/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/frontend/apps/css/responsive.css') ?>">
</head>

<body>
    <!-- preloader -->
    <?= $this->include('frontend/components/preloader') ?>
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <?= $this->include('frontend/components/header') ?>

        <section class="hero-it-solution hero-nine-bg ptb-60">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="section-heading pt-60">
                            <h3><?= ucwords($config_menu->choose_app) ?></h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-top: -60px;">
                    <?php foreach ($apps as $key => $value) { ?>
                        <div class="col-md-6 col-lg-4">
                            <a href="<?= $value->url ?>" class="mt-5 d-block" target="_blank">
                                <span class="image-bg">
                                    <span class="image-shop-scroll" style="background-image: url(<?= base_url('assets/images/apps/' . $value->image) ?>)"></span>
                                </span>
                                <h5 class="mb-0 mt-3 text-center"><?= $value->name ?></h5>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>

        <?= $this->include('frontend/components/footer') ?>
    </div>
    <!-- scripts -->
    <?= $this->include('frontend/components/scripts') ?>
</body>

</html>