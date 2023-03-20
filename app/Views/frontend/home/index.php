<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('frontend/components/styles') ?>
    <title><?= $config->name ?></title>
</head>

<body>
    <div role="main" class="main">

        <div id="home" class="slider-container rev_slider_wrapper" style="height: 650px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 650, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
                <ul>
                    <?php foreach ($home as $key => $value) { ?>
                        <li data-transition="fade">
                            <img src="{{asset('assets/images')}}/{{$value->photo}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">

                            <a href="{{route('promotion', $value->id)}}">
                                <div class="tp-caption main-label" data-x="left" data-hoffset="25" data-y="center" data-voffset="-5" data-start="1500" data-whitespace="nowrap" data-transform_in="y:[100%];s:500;" data-transform_out="opacity:0;s:500;" style="z-index: 5; font-size: 1.5em; text-transform: uppercase;" data-mask_in="x:0px;y:0px;">{{$value->text_content}}</div>

                                <div class="tp-caption main-label" data-x="left" data-hoffset="25" data-y="center" data-voffset="-55" data-start="500" style="z-index: 5; text-transform: uppercase; font-size: 52px;" data-transform_in="y:[-300%];opacity:0;s:500;">{{$value->text_header}}</div>

                                <div class="tp-caption bottom-label" data-x="left" data-hoffset="25" data-y="center" data-voffset="40" data-start="2000" style="z-index: 5; border-bottom: 1px solid #fff; padding-bottom: 3px;" data-transform_in="y:[100%];opacity:0;s:500;" style="font-size: 1.2em;">{{$value->text_footer}}</div>
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

        <section id="department" class="section section-no-border">
            <div class="container">
                <div class="row pt-3">
                    <div class="col">
                        <h2 class="font-weight-semibold mb-0">Layanan</h2>
                        <p class="lead font-weight-normal">Berikut adalah layanan yang tersedia di RSIA Herawaty</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <?php foreach ($layanan as $key => $value) { ?>
                        <div class="col-lg-4">
                            <div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                                <div class="feature-box-icon" style="min-width: 4.7rem;">
                                    <img src="{{asset('assets/images')}}/{{$value->photo}}" alt class="img-fluid" />
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="font-weight-semibold"><a href="{{url('layanan_detail', $value->id)}}" class="text-decoration-none">{{$value->layanan}}</a></h4>
                                    <p>{{substr($value->ket, 0, 150)}} ...</p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section id="doctor" class="team pb-2">
            <div class="container">
                <div class="row pt-4">
                    <div class="col">
                        <h2 class="font-weight-semibold mb-0">Doctors</h2>
                        <p class="lead font-weight-normal">Our Specialists</p>

                        <div id="porfolioAjaxBoxMedical" class="ajax-box ajax-box-init mb-4">

                            <div class="bounce-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>

                            <div class="ajax-box-content" id="porfolioAjaxBoxContentMedical"></div>

                        </div>

                    </div>
                </div>
                <div class="row pb-4">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav pl-1 pr-1" data-plugin-options="{'items': 4, 'loop': false, 'dots': false, 'nav': true}">
                        <?php foreach ($dokter as $key => $value) { ?>
                            <div class="pr-3 pl-3">
                                <!-- <a href="#" data-href="demo-medical-doctors-detail.html" data-ajax-on-page class="text-decoration-none"> -->
                                <!-- <a href="#" data-toggle="modal" data-target="#largeModalDoctor"> -->
                                <a href="#" data-toggle="modal" data-target="#largeModalDoctorNone">
                                    <span class="thumb-info thumb-info-no-zoom thumb-info-hide-wrapper-bg">
                                        <span class="thumb-info-wrapper m-0">
                                            <img src="{{asset('assets/images')}}/{{$value->photo    }}" class="img-fluid" alt="">
                                        </span>
                                        <span class="thumb-info-caption p-4">
                                            <span class="custom-thumb-info-title">
                                                <span class="custom-thumb-info-type font-weight-light text-4">{{$value->join_profesi->profesi}}</span>
                                                <span class="custom-thumb-info-inner font-weight-semibold text-5">{{$value->nama}}</span>
                                                <i class="icon-arrow-right-circle icons font-weight-semibold text-5 "></i>
                                            </span>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <section id="biaya" class="section">
            <div class="container">
                <div class="row pt-3">
                    <div class="col">
                        <h2 class="font-weight-semibold mb-0">Estimasi Biaya</h2>
                        <p class="lead font-weight-normal">List of our features resources</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <div class="appear-animation popup-gallery-ajax animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                            <div class="owl-carousel owl-theme mb-0 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}" style="height: auto;">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-286px, 0px, 0px); transition: all 0s ease 0s; width: 3435px;">
                                        <?php foreach ($tindakan as $key => $value) { ?>
                                            <div class="owl-item active" style="width: 251.25px; margin-right: 35px;">
                                                <div class="portfolio-item">
                                                    <a href="{{route('detail_biaya', $value->id)}}" data-ajax-on-modal="{{$value->id}}">
                                                        <span class="thumb-info thumb-info-lighten">
                                                            <span class="thumb-info-wrapper">
                                                                <img src="{{asset('assets/images')}}/{{$value->photo}}" class="img-fluid border-radius-0" alt="">
                                                                <span class="thumb-info-title">
                                                                    <span class="thumb-info-inner">{{$value->tindakan}}</span>
                                                                    <span class="thumb-info-type">IDR</span>
                                                                </span>
                                                                <span class="thumb-info-action">
                                                                    <!-- <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span> -->
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <h4 class="mb-2">Notes</h4><br>
                <div class="process process-vertical">
                    <?php $no = 0;
                    $delay = 0;
                    foreach ($notes_biaya as $key => $value) {
                        $no++;
                        $delay = $delay + 200; ?>
                        <div class="process-step appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="{{$delay}}" style="animation-delay: 200ms;">
                            <div class="process-step-circle">
                                <strong class="process-step-circle-content">{{$no}}</strong>
                            </div>
                            <div class="process-step-content">
                                <h4 class="mb-2 text-4 font-weight-bold"></h4>
                                <p class="mb-0">{{$value->notes}}</p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>

        <section id="kamar" class="team pb-2">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2 class="font-weight-semibold mb-0">Kamar</h2>
                        <p class="lead font-weight-normal">List kamar, harga dan fasilitasnya</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <div class="appear-animation popup-gallery-ajax animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                            <div class="owl-carousel owl-theme mb-0 owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}" style="height: auto;">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage" style="transform: translate3d(-286px, 0px, 0px); transition: all 0s ease 0s; width: 3435px;">
                                        <?php foreach ($kelas as $key => $value) { ?>
                                            <div class="owl-item active" style="width: 251.25px; margin-right: 35px;">
                                                <div class="portfolio-item">
                                                    <a href="{{route('detail_kamar', $value->id)}}" data-ajax-on-modal="{{$value->id}}">
                                                        <span class="thumb-info thumb-info-lighten">
                                                            <span class="thumb-info-wrapper">
                                                                <img src="{{asset('assets/images')}}/{{$value->photo}}" class="img-fluid border-radius-0" alt="">
                                                                <span class="thumb-info-title">
                                                                    <span class="thumb-info-inner">{{$value->kelas}}</span>
                                                                    <!-- <span class="thumb-info-type">IDR</span> -->
                                                                </span>
                                                                <span class="thumb-info-action">
                                                                    <!-- <span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span> -->
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="container">

                    <div class="row">
                        <div class="col">
                            <h4 class="mb-2">Notes</h4>

                            <div class="row process">
                                <?php $delay = 0;
                                $no = 0;
                                foreach ($notes_kamar as $key => $value) {
                                    $delay = $delay + 200;
                                    $no++; ?>
                                    <div class="process-step col-md-6 col-lg-3 mb-5 mb-md-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="{{$delay}}" style="animation-delay: 200ms;">
                                        <!-- <div class="process-step-circle">
                                                <strong class="process-step-circle-content">{{$no}}</strong>
                                            </div> -->
                                        <div class="process-step-content">
                                            <p class="mb-0">{{$value->notes}}</p>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <!-- Google Maps - Settings on footer -->
                        <!-- <img src="{{asset('assets/images')}}/{{$alur->alur}}"> -->
                        <img class="img-fluid" src="{{asset('assets/images')}}/{{$alur->photo}}">
                        <!-- <div id="googlemaps" class="google-ma h-100 mb-0" style="min-height: 400px;"></div> -->

                    </div>
                    <div class="col-md-6">

                        <div class="px-4 ">
                            <h2 class="font-weight-bold line-height-1 mb-2">Contact Us</h2><br>
                            <!-- <p class="text-3 mb-4">LOREM IPSUM DOLOR SIT A MET</p> -->
                            <form class="cmxform" id="signupForm" method="POST" enctype="multipart/form-data" action="{{ route('store_comment') }}">
                                @csrf
                                <div class="contact-form-success alert alert-success d-none mt-4" id="contactSuccess">
                                    <strong>Success!</strong> Your message has been sent to us.
                                </div>

                                <div class="contact-form-error alert alert-danger d-none mt-4" id="contactError">
                                    <strong>Error!</strong> There was an error sending your message.
                                    <span class="mail-error-message text-1 d-block" id="mailErrorMessage"></span>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-xl-4">
                                        <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name" required="">
                                    </div>
                                    <div class="form-group col-xl-8">
                                        <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subjek" id="subject" placeholder="Subject" required="">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="pesan" id="message" placeholder="Message" required=""></textarea>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col">
                                        <input type="submit" value="SUBMIT" class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section-secondary">
            <div class="container">
                <div class="row pt-5 pb-5">
                    <div class="owl-carousel owl-theme nav-bottom rounded-nav" data-plugin-options="{'items': 1, 'loop': false, 'dots': false}">
                        <?php foreach ($comment as $key => $value) { ?>
                            <div class="row justify-content-center">
                                <div class="col-lg-8 pt-4 mt-3">
                                    <div class="testimonial testimonial-style-2 testimonial-with-quotes mb-0">
                                        <div class="testimonial-quote">“</div>
                                        <blockquote>
                                            <p class="font-weight-light">{{$value->pesan}}</p>
                                        </blockquote>
                                        <div class="testimonial-author">
                                            <p class="text-uppercase">
                                                <strong>{{$value->nama}}</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">Biaya</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="container py-4">

                            <div class="row mb-4">
                                <div class="col">
                                    <!-- <h4 class="mb-2"><strong>Four</strong> Plans</h4> -->
                                </div>
                            </div>

                            <div class="pricing-table pricing-table-no-gap mb-4">
                                <div class="col-md-6 col-lg-3">
                                    <div class="plan">
                                        <div class="plan-header">
                                            <h3>Kela</h3>
                                        </div>
                                        <div class="plan-price">
                                            <span class="price">IDR</span>
                                            <!-- <label class="price-label">PER MONTH</label> -->
                                        </div>
                                        <div class="plan-features">
                                            <ul>
                                                <li>Rp. 14.000.000</li>
                                                <li>Rp. 16.000.000</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="largeModaldokter" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">Jadwal Dokter</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>Jadwal Poli Anak</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Hari</th>
                                            <th>Jadwal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($jadwal_dokter_anak as $key => $value) { ?>
                                            <tr class="active">
                                                <td>{{$value->nama_hari}}</td>
                                                <td>{{$value->jadwal}}</td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6 divider-left-border">
                                <h4>Jadwal Poli Kandungan</h4>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Hari
                                            </th>
                                            <th>
                                                Jadwal
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($jadwal_dokter_kandungan as $key => $value) { ?>
                                            <tr class="active">
                                                <td>{{$value->nama_hari}}</td>
                                                <td>{{$value->jadwal}}</td>
                                            </tr>
                                        <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="largeModalDoctor" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">Large Modal Title</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="row mt-5 mb-5 pt-1">
                            <div class="col-lg-4">

                                <div class="owl-carousel owl-theme owl-loaded owl-drag owl-carousel-init" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}" style="height: auto;">


                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-1080px, 0px, 0px); transition: all 0s ease 0s; width: 2160px;">
                                            <div class="owl-item cloned" style="width: 350px; margin-right: 10px;">
                                                <div>
                                                    <span class="img-thumbnail d-block no-borders">
                                                        <img alt="" class="img-fluid" src="{{asset('tmp/img/demos/medical/doctors/doctor-1.jpg')}}">
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 350px; margin-right: 10px;">
                                                <div>
                                                    <span class="img-thumbnail d-block no-borders">
                                                        <img alt="" class="img-fluid" src="img/demos/medical/doctors/doctor-1-2.jpg">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-lg-8">

                                <h3 class="font-weight-bold mt-2">John Doe</h3>

                                <h5 class="mt-2 mb-1">Doctor BIO</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo. Nam at eros quis mi egestas fringilla non nec purus.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempus nibh sed elimttis adipiscing. Fusce in hendrerit purus. Suspendisse potenti. Proin quis eros odio, dapibus dictum mauris. Donec nisi libero, adipiscing id pretium eget, consectetur sit amet leo.</p>

                                <a href="#" class="btn btn-primary btn-icon mb-3"><i class="icon-calendar icons"></i>Doctor Timetable</a>

                                <h5 class="mt-2 mb-3">Procedures</h5>

                                <ul class="list list-icons list-primary">
                                    <li><i class="fas fa-check-circle"></i> Surgeries</li>
                                    <li><i class="fas fa-check-circle"></i> Neck Pain</li>
                                    <li><i class="fas fa-check-circle"></i> Cervical Myelopathy</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- scripts -->
        <?= $this->include('frontend/components/scripts') ?>
</body>

</html>