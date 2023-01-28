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

                                <form method="POST" action="/reset-password" id="main_author_form">
                                    @csrf

                                    <input type="hidden" name="token" value="{{ request()->route('token') }}">

                                    <div class="form-group">
                                        <input readonly id="email" type="email" class="form-control" value="{{ request()->email }}" name="email">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Mot de passe">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" placeholder="Confirmer le mot de passe">
                                        @error('password_confirmation')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="common_form_submit">
                                        <button type="submit" class="btn btn_theme btn_md">Réinitialiser</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

