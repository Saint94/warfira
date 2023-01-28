@extends('frontend.layout.app')

@section('title', "Mot de passe oublié")

@section('content')

        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Mot de passe oublié</h2>
                            <ul>
                                <li><a href="{{ route('/') }}">Accueil</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Mot de passe oublié</li>
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
                                <h2>Réinitialiser votre mot de passe</h2>
                            </div>
                            <div class="common_author_form">

                                @if (session('status'))
                                    <div class="alert alert-success my-3">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="/forgot-password" id="main_author_form">
                                    @csrf

                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" autocomplete="email" autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="common_form_submit">
                                        <button type="submit" class="btn btn_theme btn_md">Réinitialiser le mot de passe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

