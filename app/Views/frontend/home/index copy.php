<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/components/styles') ?>
    <title><?= $config->name ?></title>
</head>

<body>
    <div role="main" class="main">

        <!-- header -->
        <?= $this->include('frontend/components/header') ?>

        <div id="home" class="slider-container rev_slider_wrapper" style="height: 650px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
                <ul>
                    <?php foreach ($slider_events as $key => $value) { ?>
                        <li data-transition="fade">
                            <img src="<?= base_url('assets/images/slider_event/' . $value->image) ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                            <a href="<?= base_url('promotion/' . $value->id) ?>">
                                <div class="tp-caption main-label" data-x="left" data-hoffset="25" data-y="center" data-voffset="-5" data-start="1500" data-whitespace="nowrap" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" style="z-index: 5; font-size: 1.5em; text-transform: uppercase;" data-mask_in="x:0px;y:0px;"><?= $value->content ?></div>

                                <div class="tp-caption main-label" data-x="left" data-hoffset="25" data-y="center" data-voffset="-55" data-start="500" style="z-index: 5; text-transform: uppercase; font-size: 52px;" data-transform_in="y:[-300%];opacity:0;s:500;"><?= $value->title ?></div>

                                <div class="tp-caption bottom-label" data-x="left" data-hoffset="25" data-y="center" data-voffset="40" data-start="2000" style="z-index: 5; border-bottom: 1px solid #fff; padding-bottom: 3px;" data-transform_in="y:[100%];opacity:0;s:500;" style="font-size: 1.2em;"><?= $value->subtitle ?></div>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <section id="about_us" class="section-custom-medical">
            <div class="container">
                <div class="row medical-schedules">
                    <div class="col-xl-3 box-one bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="0">
                        <div class="feature-box feature-box-style-2 align-items-center p-4">
                            <div class="feature-box-icon p-0">
                                <img src="{{asset('tmp/img/demos/medical/icons/medical-icon-heart.png')}}" alt class="img-fluid pt-1" />
                            </div>
                            <div class="feature-box-info">
                                <h4 class="m-0 p-0">Fasilitas Pelayanan</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 box-two bg-color-tertiary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
                        <h5 class="m-0">
                            <a href="{{ route('doctor_list') }}" data-toggle="modal" data-target="#largeModaldokter">
                                Poli Anak & Kandungan
                                <i class="icon-arrow-right-circle icons"></i>
                            </a>
                        </h5>
                    </div>
                    <div class="col-xl-3 box-three bg-color-primary appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1200">
                        <div class="expanded-info p-4 bg-color-primary">
                            <?php foreach ($jamkerja as $key => $value) { ?>
                                <div class="info custom-info">
                                    <span>{{ $value->ket_jam_kerja }}</span>
                                    <span>{{ $value->jumlah_jam }}</span>
                                </div>
                            <?php } ?>
                        </div>
                        <h5 class="m-0">
                            Opening Hours
                            <i class="icon-arrow-right-circle icons"></i>
                        </h5>
                    </div>
                    <div class="col-xl-3 box-four bg-color-secondary p-0 appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="1800">
                        <a href="tel:{{ $emergency_about->emergency_number }}" class="text-decoration-none">
                            <div class="feature-box feature-box-style-2 m-0">
                                <div class="feature-box-icon">
                                    <i class="icon-call-out icons"></i>
                                </div>
                                <div class="feature-box-info">
                                    <label class="font-weight-light">Emergency case</label>
                                    <strong class="font-weight-normal">{{ $emergency_about->emergency_number }}</strong>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col">

                        <div class="row mt-3 mb-5">
                            <div class="col-md-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                                <h3 class="font-weight-bold text-4 mb-2">Visi</h3>
                                <p>{{ $visi->visi }}</p>
                            </div>
                            <div class="col-md-4 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="600" style="animation-delay: 600ms;">
                                <ul>
                                    <h3 class="font-weight-bold text-4 mb-2">Misi</h3>
                                    <?php foreach ($misi as $key => $value) { ?>
                                        <li>{{ $value->misi }}</li>
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="col-md-4 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800" style="animation-delay: 800ms;">
                                <h3 class="font-weight-bold text-4 mb-2">Motto</h3>
                                <p>{{ $motto->motto }}</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- scripts -->
        <?= $this->include('frontend/components/scripts') ?>
</body>

</html>