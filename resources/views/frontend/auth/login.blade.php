@extends('frontend.layout.app')

@section('title', "S'identifier")

@section('content')

         <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Connectez-vous</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Accueil</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Connectez-vous</li>
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
                            <h2 style="color: #1E3A8A">Connectez-vous</h2>
                            <h4>Gérez et consultez à tout moment vos différents billets et hôtels reservés sur Warfira.</h4>
                        </div>
                        <div class="common_author_form">
                            <form action="#" id="main_author_form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Votre adresse mail" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Mot de passe" />
                                    <a href="forgot-password.html">Mot de passe oublié ?</a>
                                </div>
                                <div class="common_form_submit">
                                    <button class="btn btn_theme btn_md">Se connecter</button>
                                    <br>
                                </div>

                                <div class="have_acount_area other_author_option">
                                    <div class="line_or">
                                        <span>Ou</span>
                                    </div>
                                    <ul>
                                        <li><a href="#!"><img src="{{asset('assets_frontend/img/icon/facebook.png') }}" alt="icon"></a> Continuer avec Facebook</li>
                                        <li><a href="#!"><img src="{{asset('assets_frontend/img/icon/google.png') }}" alt="icon"></a> Continuer avec Google</li>
                                    </ul>
                                </div>
                                <div class="have_acount_area">
                                    <p>Nouvel utilisateur ?<a href="{{ route('register') }}"> Créer votre compte</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

