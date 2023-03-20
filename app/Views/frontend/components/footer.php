<footer id="footer" class="m-0">
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-md-4 col-lg-3 mb-2">
                <h4 class="mb-4">Location</h4>
                <p>
                    {{$location->company_name}}<br>
                    {{$location->location}}<br>
                    {{$location->email}}
                </p>
            </div>
            <div class="col-md-4 col-lg-3">
                <h4 class="mb-4">Opening Hours</h4>
                <?php foreach ($jamkerja as $key => $value) { ?>
                    <div class="info custom-info">
                        <span>{{ $value->ket_jam_kerja }}</span>
                        <span>{{ $value->jumlah_jam }}</span>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="contact-details">
                    <h4 class="mb-4">Emergency Cases</h4>
                    <ul>
                        <?php foreach ($emergency as $key => $value) { ?>
                            <li>{{$value->emergency_number}}</li>
                        <?php } ?>
                    </ul>

                </div>
            </div>
            <div class="col-lg-2 text-md-center text-lg-left ml-lg-auto">
                <h4 class="mb-4">Social Media</h4>
                <ul class="social-icons">
                    <li class="social-icons-facebook">
                        <a href="http://www.facebook.com/" target="_blank" title="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="social-icons-twitter">
                        <a href="http://www.twitter.com/" target="_blank" title="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="social-icons-linkedin">
                        <a href="http://www.linkedin.com/" target="_blank" title="Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center m-0">
                    <p>© Copyright RSIA HERAWATY 2020. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>