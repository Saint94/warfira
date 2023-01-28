<header class="main_header_arae">
    <!-- Top Bar -->
    <div class="topbar-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-list">
                        <li>
                            <a href="#!"><i class="fab fa-twitter-square"></i></a>
                            <a href="#!"><i class="fab fa-instagram"></i></a>
                            <a href="#!"><i class="fab fa-facebook"></i></a>
                            <a href="#!"><i class="fab fa-linkedin"></i></a>
                        </li>
                        <li><a href="#!"><span>+33 753584725 / +237 693 363 427</span></a></li>
                        <li><a href="#!"><span>support@warfira.com</span></a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="topbar-others-options">
                        <li><a href="{{ route('login') }}">{{ __("S'identifier") }}</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">{{ __("Créer un compte") }}</a></li>
                        @endif
                        <li>
                            <div class="dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="lang-name"></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="{{ route("setlang", ['lang'=>'en']) }}">{{ __("Anglais") }}</a>
                                    <a class="dropdown-item" href="{{ route("setlang", ['lang'=>'es']) }}">{{ __("Espagnol") }}</a>
                                    <a class="dropdown-item" href="{{ route("setlang", ['lang'=>'de']) }}">{{ __("Allemand") }}</a>
                                    <a class="dropdown-item" href="{{ route("setlang", ['lang'=>'fr']) }}">{{ __("Français") }}</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown language-option">
                                <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="lang-name"></span>
                                </button>
                                <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="#">Dollars</a>
                                    <a class="dropdown-item" href="#">Euro</a>
                                    <a class="dropdown-item" href="#">Livre sterling</a>
                                    <a class="dropdown-item" href="#">CFA</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Bar -->
    <div class="navbar-area">
        <div class="main-responsive-nav">
            <div class="container">
                <div class="main-responsive-menu">
                    <div class="logo">
                        <a href="{{ route('/') }}">
                            <img src="{{asset('assets_frontend/img/logo-warfira.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{ route('/') }}">
                        <img src="{{asset('assets_frontend/img/logo-warfira.png')}}" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <li class="nav-item {{ set_active_route('/') }}">
                                    <a href="{{ route('/') }}" class="nav-link">{{ __("Accueil") }}</a>
                                </li>
                                <li class="nav-item {{ set_active_route('vol.index') }}">
                                    <a href="{{ route('vol.index') }}" class="nav-link">{{ __("Vols") }}</a>
                                </li>
                                <li class="nav-item {{ set_active_route('hotel.index') }}">
                                    <a href="{{ route('hotel.index') }}" class="nav-link">{{ __("Hôtels") }}</a>
                                </li>
                                <li class="nav-item" {{ set_active_route('voiture.index') }}>
                                    <a href="{{ route('voiture.index') }}" class="nav-link">{{ __("Voitures") }}</a>
                                </li>
                                <li class="nav-item {{ set_active_route('sejour.index') }}">
                                    <a href="{{ route('sejour.index') }}" class="nav-link">{{ __("Séjour") }}</a>
                                </li>
                                <li class="nav-item {{ set_active_route('autreservice.index') }}">
                                    <a href="{{ route('autreservice.index') }}" class="nav-link">{{ __("Autres services") }}</a>
                                </li>
                                <li class="nav-item {{ set_active_route('contact.index') }}">
                                    <a href="{{ route('contact.index') }}" class="nav-link">{{ __("Contactez nous") }}</a>
                                </li>

                                <li class="nav-item {{ set_active_route('about.index') }}">
                                    <a href="{{ route('about.index') }}" class="nav-link">{{ __("À propos de nous") }}</a>
                                </li>
                            </li>
                        </ul>
                        <div class="others-options d-flex align-items-center">
                            <div class="option-item">
                                <a href="{{ route('partenaire.index') }}" class="btn  btn_navber">Devenir partenaire</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
