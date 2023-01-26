@extends('frontend.layout.app')

@section('title', 'Contactez-nous')

@section('content')


       <!-- Common Banner Area -->
       <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>À propos de nous</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Accueil</a></li>
                            <li><span><i class="fas fa-circle"></i></span>À propos de nous</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us -->
    <section id="about_us_top" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about_us_left">
                        <h5>About us</h5>
                        <h2>We Are The World Best Travel Agency Company Since 2000</h2>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                            no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                            dolor sit amet, consetetur sadipscing elitr </p>
                        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                            no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
                            dolor sit amet, consetetur sadipscing elitr </p>
                        <a href="tour-search.html" class="btn btn_theme btn_md">Find tours</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about_us_right">
                        <img src="assets/img/common/abour_right.png" alt="img">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- About Service Area -->
    <section id="about_service_offer" class="section_padding_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/world.png" alt="img">
                        <h5><a href="#!">Best services</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/walte.png" alt="img">
                        <h5><a href="#!">Trusted payment</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/star.png" alt="img">
                        <h5><a href="#!">Top facility</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div class="about_service_boxed">
                        <img src="assets/img/icon/persentis.png" alt="img">
                        <h5><a href="#!">Awesome deals</a></h5>
                        <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                            Incididunt ut dolore.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

