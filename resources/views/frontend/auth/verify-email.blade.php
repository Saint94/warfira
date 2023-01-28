@extends('frontend.layout.app')

@section('title', "Activé mon compte")

@section('content')

        <!-- Common Banner Area -->
        <section id="common_banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="common_bannner_text">
                            <h2>Activé mon compte</h2>
                            <ul>
                                <li><a href="{{ route('/') }}">Accueil</a></li>
                                <li><span><i class="fas fa-circle"></i></span>Activé mon compte</li>
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
                                <h2>Vous devez verifier votre boite mails afin d'activer votre compte</h2>
                            </div>
                            <div class="common_author_form">

                                @if (session('status') == 'verification-link-sent')
                                    <div class="alert alert-success my-3">
                                        Un nouveau mail à vient d'être envoyé dans votre boite mails !
                                    </div>
                                @endif

                                <form method="POST" action="/email/verification-notification" id="main_author_form">
                                    @csrf
                                    <div class="common_form_submit">
                                        <button type="submit" class="btn btn_theme btn_md">Cliquer ici pour envoyer à nouveau</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

@endsection

