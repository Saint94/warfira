@extends('frontend.layout.app')

@section('title', "Tableau de bord")

@section('content')

    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Mon profil</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Accueil</a></li>
                            <li><span><i class="fas fa-circle"></i></span>Mon profil</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dashboard Area -->
    <section id="dashboard_main_arae" class="section_padding">
        <div class="container">
            <div class="row">

                @include('frontend.dashboard._menu')

                <div class="col-lg-8">
                    <div class="dashboard_common_table">
                        <h3>Mon profil</h3>
                        <div class="profile_update_form">
                            <form action="{{ route('mon-profil.update',Auth::user()->id) }}" id="profile_form_area" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="name">Nom(s) et Pr&eacute;nom(s) <abbr style="color: #bd4147;">(*)</abbr></label>
                                            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}"/>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="tel">N° de téléphone <abbr style="color: #bd4147;">(*)</abbr></label>
                                            <input type="text" id="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ Auth::user()->tel }}"/>
                                            @error('tel')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Email <abbr style="color: #bd4147;">(*)</abbr></label>
                                            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}"/>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="common_form_submit">
                                        <button type="submit" class="btn btn_theme btn_md">Mettre à jour</button>
                                        <br>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

