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

        <!--register section start-->
        <section class="hero-it-solution hero-nine-bg ptb-120" style="background: url(<?= base_url('assets/images/hero/' . $config->hero_background_image) ?>)">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-7 col-md-6 order-0 order-lg-1">
                        <div class="hero-img mt-5 mt-lg-0">
                            <img src="<?= base_url('assets/images/configs/registration.png') ?>" alt="hero hero-it-solution " class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-6 order-0 order-lg-1">
                        <div class="register-wrap p-5 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-1">
                            <h5 class="fw-medium h5">Create your account to start your 14 day free tial</h5>

                            <form action="<?= base_url('get-started/store') ?>" class="mt-4 register-form" method="post">
                                <div class="row">
                                    <?php if (session()->getFlashdata('info')) { ?>
                                        <div class="col-sm-12" style="margin-bottom: 20px;">
                                            <mark><?= session()->getFlashdata('info') ?></mark>
                                        </div>
                                    <?php } ?>
                                    <input type="hidden" name="app_id" value="<?= $app_id ?>">
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" name="name" class="form-control" placeholder="Name" aria-label="name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 ">
                                        <div class="input-group mb-3">
                                            <input type="email" name="email" class="form-control" placeholder="Email" aria-label="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" aria-label="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group mb-3">
                                            <input type="password" name="password" class="form-control" minlength="6" placeholder="Set Admin Password" aria-label="Administrator Password" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                                            <label class="form-check-label small" for="flexCheckChecked">
                                                I agree to the
                                                <a href="#"> Terms & Conditions and Privacy Policy</a>.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary mt-4 d-block w-100">Continue
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--register section end-->

        <?= $this->include('frontend/components/footer') ?>
    </div>
    <!-- scripts -->
    <?= $this->include('frontend/components/scripts') ?>
</body>

</html>