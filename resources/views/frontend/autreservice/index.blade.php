@extends('frontend.layout.app')

@section('title', 'Autres services')

@section('content')


       <!-- Common Banner Area -->
       <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Autre service</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Accueil</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Autre service</li>
                        </ul>
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
                        <h5><a href="#!">Autres service</a></h5>

                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection

