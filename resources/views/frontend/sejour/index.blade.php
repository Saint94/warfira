@extends('frontend.layout.app')

@section('title', 'Séjour')

@section('content')


    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Séjour</h2>
                        <ul>
                            <li><a href="index.html">Accueil</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Séjour</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Area -->
    <section id="theme_search_form_tour">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="theme_search_form_area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tour_search_form">
                                    <form action="!#">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                                                <div class="flight_Search_boxed" style="background-color: #EEEFFC">
                                                    <p>Destination</p>
                                                    <input type="text" placeholder="Where are you going?">
                                                    <span>Where are you going?</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                                                <div class="form_search_date">
                                                    <div class="flight_Search_boxed date_flex_area" style="background-color: #EEEFFC">
                                                        <div class="Journey_date">
                                                            <p>Check In date</p>
                                                            <input type="date" value="2022-05-03">
                                                            <span>Thursday</span>
                                                        </div>
                                                        <div class="Journey_date">
                                                            <p>Check Out date</p>
                                                            <input type="date" value="2022-05-05">
                                                            <span>Thursday</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2  col-md-6 col-sm-12 col-12">
                                                <div class="flight_Search_boxed dropdown_passenger_area" style="background-color: #EEEFFC">
                                                    <p>Passenger, Class </p>
                                                    <div class="dropdown">
                                                        <button class="dropdown-toggle final-count"
                                                            data-toggle="dropdown" type="button"
                                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            1 Guests
                                                        </button>
                                                        <div class="dropdown-menu dropdown_passenger_info"
                                                            aria-labelledby="dropdownMenuButton1">
                                                            <div class="traveller-calulate-persons">
                                                                <div class="passengers">
                                                                    <h6>Guests</h6>
                                                                    <div class="passengers-types">
                                                                        <div class="passengers-type">
                                                                            <div class="text"><span
                                                                                    class="count pcount">2</span>
                                                                                <div class="type-label">
                                                                                    <p>Adult</p>
                                                                                    <span>12+
                                                                                        yrs</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="button-set">
                                                                                <button type="button" class="btn-add">
                                                                                    <i class="fas fa-plus"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn-subtract">
                                                                                    <i class="fas fa-minus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="passengers-type">
                                                                            <div class="text"><span
                                                                                    class="count ccount">0</span>
                                                                                <div class="type-label">
                                                                                    <p class="fz14 mb-xs-0">
                                                                                        Children
                                                                                    </p><span>2
                                                                                        - Less than 12
                                                                                        yrs</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="button-set">
                                                                                <button type="button" class="btn-add-c">
                                                                                    <i class="fas fa-plus"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn-subtract-c">
                                                                                    <i class="fas fa-minus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                        <div class="passengers-type">
                                                                            <div class="text"><span
                                                                                    class="count incount">0</span>
                                                                                <div class="type-label">
                                                                                    <p class="fz14 mb-xs-0">
                                                                                        Infant
                                                                                    </p><span>Less
                                                                                        than 2
                                                                                        yrs</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="button-set">
                                                                                <button type="button"
                                                                                    class="btn-add-in">
                                                                                    <i class="fas fa-plus"></i>
                                                                                </button>
                                                                                <button type="button"
                                                                                    class="btn-subtract-in">
                                                                                    <i class="fas fa-minus"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <span>Business</span>
                                                </div>
                                            </div>
                                            <div class="top_form_search_button">
                                                <button class="btn btn_theme btn_md" type="button">Rechercher</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Hotel Search Areas -->
    <section id="explore_area" class="section_padding">
        <div class="container">
            <!-- Section Heading -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section_heading_center">
                        <h2>38 hotel found</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_side_search_area">
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Filter by price</h5>
                            </div>
                            <div class="filter-price">
                                <div id="price-slider"></div>
                            </div>
                            <button class="apply" type="button">Apply</button>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Filter by Review</h5>
                            </div>
                            <div class="filter_review">
                                <form class="review_star">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
                                        <label class="form-check-label" for="flexCheckDefault1">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                        <label class="form-check-label" for="flexCheckDefault2">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                        <label class="form-check-label" for="flexCheckDefault3">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                        <label class="form-check-label" for="flexCheckDefault5">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Filter by hotel star</h5>
                            </div>
                            <div class="filter_review">
                                <form class="review_star">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaulta">
                                        <label class="form-check-label" for="flexCheckDefaulta">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefaulf21">
                                        <label class="form-check-label" for="flexCheckDefaulf21">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefaultf3">
                                        <label class="form-check-label" for="flexCheckDefaultf3">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefaultf4">
                                        <label class="form-check-label" for="flexCheckDefaultf4">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="flexCheckDefaultf5">
                                        <label class="form-check-label" for="flexCheckDefaultf5">
                                            <i class="fas fa-star color_theme"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                            <i class="fas fa-star color_asse"></i>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Facilities</h5>
                            </div>
                            <div class="tour_search_type">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf1">
                                    <label class="form-check-label" for="flexCheckDefaultf1">
                                        <span class="area_flex_one">
                                            <span>Wake-up call</span>
                                            <span>20</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultf2">
                                    <label class="form-check-label" for="flexCheckDefaultf2">
                                        <span class="area_flex_one">
                                            <span>Flat TV</span>
                                            <span>14</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf3">
                                    <label class="form-check-label" for="flexCheckDefaultaf3">
                                        <span class="area_flex_one">
                                            <span>Vehicle service</span>
                                            <span>30</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf4">
                                    <label class="form-check-label" for="flexCheckDefaultaf4">
                                        <span class="area_flex_one">
                                            <span>Guide service</span>
                                            <span>22</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultaf5">
                                    <label class="form-check-label" for="flexCheckDefaultaf5">
                                        <span class="area_flex_one">
                                            <span>Internet, Wi-fi</span>
                                            <span>41</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="left_side_search_boxed">
                            <div class="left_side_search_heading">
                                <h5>Hotel service</h5>
                            </div>
                            <div class="tour_search_type">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt1">
                                    <label class="form-check-label" for="flexCheckDefaultt1">
                                        <span class="area_flex_one">
                                            <span>Gymnasium</span>
                                            <span>20</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt2">
                                    <label class="form-check-label" for="flexCheckDefaultt2">
                                        <span class="area_flex_one">
                                            <span>Mountain Bike</span>
                                            <span>14</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt3">
                                    <label class="form-check-label" for="flexCheckDefaultt3">
                                        <span class="area_flex_one">
                                            <span>Wifi</span>
                                            <span>62</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt4">
                                    <label class="form-check-label" for="flexCheckDefaultt4">
                                        <span class="area_flex_one">
                                            <span>Aerobics Room</span>
                                            <span>08</span>
                                        </span>
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefaultt5">
                                    <label class="form-check-label" for="flexCheckDefaultt5">
                                        <span class="area_flex_one">
                                            <span>Golf Cages</span>
                                            <span>12</span>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel1.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel2.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                                    <div class="discount_tab">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Hotel paradise international</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel3.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel4.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Mariana island</p>
                                    <div class="discount_tab">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Hotel deluxe</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel5.png" alt="img"><a>
                                            <p><i class="fas fa-map-marker-alt"></i>Kathmundu, Nepal</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Hotel rajavumi</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel6.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Beach view</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Thailand grand suit</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel7.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Long island</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Zefi resort and spa</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel8.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Philippine</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Manila international resort</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel1.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel1.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>New beach, Thailand</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Kantua hotel, Thailand</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel2.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Indonesia</p>
                                    <div class="discount_tab">
                                        <span>50%</span>
                                    </div>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Hotel paradise international</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="theme_common_box_two">
                                <div class="theme_two_box_img">
                                    <a href="hotel-details.html"><img src="assets/img/tab-img/hotel3.png" alt="img"></a>
                                    <p><i class="fas fa-map-marker-alt"></i>Kualalampur</p>
                                </div>
                                <div class="theme_two_box_content">
                                    <h4><a href="hotel-details.html">Hotel kualalampur</a></h4>
                                    <p><span class="review_rating">4.8/5 Excellent</span> <span
                                            class="review_count">(1214
                                            reviewes)</span></p>
                                    <h3>$99.00 <span>Price starts from</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="pagination_area">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

