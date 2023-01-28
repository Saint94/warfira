@extends('frontend.layout.app')

@section('title', "Vérifier votre adresse email")

@section('content')

        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Vérifier votre adresse email</h2>
                            <ul>
                                <li><a href="{{ route('/') }}">Accueil</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Vérifier votre adresse email</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  Common Author Area -->
        <section id="common_author_area" class="section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="common_author_boxed">
                            <div class="common_author_heading">
                                <h3>Avant de poursuivre, veuillez vérifier votre email pour un lien de vérification.</h3>
                            </div>

                            <div class="">

                                @if (session('status') == 'verification-link-sent')
                                    <div style="text-align: center" class="alert alert-success alert-dismissible mb-2" role="alert">
                                        <strong>Un nouveau lien de vérification a été envoyé à votre adresse email.</strong>
                                    </div>
                                @endif


                                <form method="POST" action="/email/verification-notification" id="main_author_form">
                                    @csrf
                                    <div class="common_form_submit">
                                        <button type="submit" class="btn btn_theme btn_md">cliquez ici pour en demander un autre</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

