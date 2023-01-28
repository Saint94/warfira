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

                            @if (session('status'))
                                <div style="text-align: center" class="alert alert-success">
                                    <strong>{{ session('status') }}</strong>
                                </div>
                            @endif

                            <form action="{{ route('login') }}" method="POST" id="main_author_form">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Votre adresse email" />
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" autocomplete="current-password" placeholder="Mot de passe"/>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div style="text-align: left;"  class="form-check write_spical_check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            Se souvenir de moi
                                        </label>
                                    </div>
                                    @if(Route::has('password.request'))
                                        <a style="float:right;" href="{{ route('password.request') }}">
                                            {{ __('Mot de passe oublié ?') }}
                                        </a>
                                    @endif
                                </div>
                                <div class="common_form_submit">
                                    <button type="submit" class="btn btn_theme btn_md">Se connecter</button>
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

