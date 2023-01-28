@extends('frontend.layout.app')

@section('title', 'Voitures')

@section('content')


<!-- search -->
<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>
            <div class="search-overlay-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="button"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Common Banner Area -->
<section id="common_banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="common_bannner_text">
                    <h2>Devenir partenaire</h2>
                    <ul>
                        <li><a href="index.html">Accueil</a></li>
                        <li><span><i class="fas fa-circle"></i></span> Devenir partenaire</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Work -->
<section id="how_it_work_area" class="section_padding">
    <div class="container">
        <!-- Section Heading -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section_heading_center">
                    <h2>How it works</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="how_it_boxed">
                    <img src="{{ url('assets_frontend/img/common/how-1.png')}}" alt="img">
                    <h3>Sign up</h3>
                    <p>Duis laboris culpa cupidatat do consequat esse officia ex.
                        Reprehenderit quis est id sint ea dolore sint nostrud demos adipisicing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="how_it_boxed">
                    <img src="{{ url('assets_frontend/img/common/how-2.png')}}" alt="img">
                    <h3>Contact with client</h3>
                    <p>Duis laboris culpa cupidatat do consequat esse officia ex.
                        Reprehenderit quis est id sint ea dolore sint nostrud demos adipisicing.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="how_it_boxed">
                    <img src="{{ url('assets_frontend/img/common/how-3.png')}}" alt="img">
                    <h3>Start earnings</h3>
                    <p>Duis laboris culpa cupidatat do consequat esse officia ex.
                        Reprehenderit quis est id sint ea dolore sint nostrud demos adipisicing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Area -->
<section id="video_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="video_area_vendor">
                    <img src="{{ url('assets_frontend/img/common/video.png')}}" alt="img">
                    <div class="video_play_button">
                        <div class="">
                            <a class="video_btn video_play_area" href="https://www.youtube.com/watch?v=VLUl3NgQY1A"
                                title="Youtube Video"><i class="fas fa-play"></i></a>
                        </div>
                        <h4>Explore amazing tours</h4>
                        <h2>Get some travel idea</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Service Area -->
<section id="about_service_offer" class="section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="about_service_boxed">
                    <img src="{{ url('assets_frontend/img/icon/world.png')}}" alt="img">
                    <h5><a href="#!">Best services</a></h5>
                    <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                        Incididunt ut dolore.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="about_service_boxed">
                    <img src="{{ url('assets_frontend/img/icon/walte.png')}}" alt="img">
                    <h5><a href="#!">Trusted payment</a></h5>
                    <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                        Incididunt ut dolore.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="about_service_boxed">
                    <img src="{{ url('assets_frontend/img/icon/star.png')}}" alt="img">
                    <h5><a href="#!">Top facility</a></h5>
                    <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                        Incididunt ut dolore.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-12">
                <div class="about_service_boxed">
                    <img src="{{ url('assets_frontend/img/icon/persentis.png')}}" alt="img">
                    <h5><a href="#!">Awesome deals</a></h5>
                    <p>Phaseus site amet tristique ligua donec iaculis leo sus cipit. Consec tetur adipiscing elit.
                        Incididunt ut dolore.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vendor Form Area -->
<section id="vendor_form_area" class="section_padding_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="vendor_form_heading">
                    <h2>Become a vendor</h2>
                    <p>Eu sint minim tempor anim aliqua officia voluptate incididunt deserunt.
                        <br /> Velitgo quis Lorem culpa qui pariatur occaecat.
                    </p>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="vendor_form">
                    <div class="tour_booking_form_box">
                        <form action="!#" id="tour_bookking_form_item">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg_input" placeholder="First name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg_input" placeholder="Last name*">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg_input"
                                            placeholder="Email address (Optional)">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg_input"
                                            placeholder="Mobile number*">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg_input"
                                            placeholder="Street address">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg_input"
                                            placeholder="Apartment, Suite, House no (optional)">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control form-select bg_input">
                                            <option value="1">Khulna</option>
                                            <option value="1">New York</option>
                                            <option value="1">Barisal</option>
                                            <option value="1">Nator</option>
                                            <option value="1">Joybangla</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control form-select bg_input">
                                            <option value="1">State</option>
                                            <option value="1">New York</option>
                                            <option value="1">Barisal</option>
                                            <option value="1">Nator</option>
                                            <option value="1">Joybangla</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-control form-select bg_input">
                                            <option value="1">Country</option>
                                            <option value="1">New York</option>
                                            <option value="1">Barisal</option>
                                            <option value="1">Nator</option>
                                            <option value="1">Joybangla</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="booking_tour_form_submit pt-4">
                        <div class="form-check write_spical_check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                            <label class="form-check-label" for="flexCheckDefaultf1">
                                I have read and accept the <a href="terms-service.html">Terms and
                                    conditions</a> and <a href="privacy-policy.html">Privacy policy</a>
                            </label>
                        </div>
                        <a href="booking-confirmation.html" class="btn btn_theme btn_md">Sign up</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="vendor_img">
                    <img src="{{ url('assets_frontend/img/common/vendor.png')}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

