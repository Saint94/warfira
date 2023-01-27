<div class="col-lg-4">
    <div class="dashboard_sidebar">
        <div class="dashboard_sidebar_user">
            <img src="{{ url('assets_frontend/img/common/empty-profile.png') }}" alt="img">

            <p><a>Mettre à jour la photo</a></p>

            <h3>{{ Auth::user()->name }}</h3>
            <p><a>{{ Auth::user()->email }}</a></p>
            <p><a>{{ Auth::user()->tel }}</a></p>
        </div>
        <div class="dashboard_menu_area">
            <ul>
                <li><a href="{{ url('/home') }}" class="active"><i class="fas fa-tachometer-alt"></i>Mon compte</a></li>
                <li><a href="{{ route('mon-profil.index') }}"><i class="fas fa-user-circle"></i>Mon profil</a></li>
                <li class="dashboard_dropdown_button" id="dashboard_dropdowns"><i class="fas fa-address-card"></i>Mes reservations
                    <span> <i class="fas fa-angle-down"></i></span>
                    <div class="booing_sidebar_dashboard" id="show_dropdown_item"
                        style="display: none;">
                        <ul>
                            <li><a href="{{ route('mes-vols.index') }}"><i class="fas fa-paper-plane"></i>Vols</a></li>
                            <li><a href="{{ route('mes-hotels.index') }}"><i class="fas fa-hotel"></i>Hôtels</a></li>
                            <li><a href="{{ route('mes-voitures.index') }}"><i class="fas fa-map"></i>Voitures</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#!" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fas fa-sign-out-alt"></i>Se déconnecter
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>


 <!-- Logout Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body logout_modal_content">
                <div class="btn_modal_closed">
                    <button type="button" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fas fa-times"></i></button>
                </div>
                <h4>
                    Êtes vous sûre ? <br>
                    Voulez-vous vous déconnecter</h4>
                <div class="logout_approve_button">
                    <a class="btn btn_theme btn_md" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Oui confirmer
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                    <button data-bs-dismiss="modal" class="btn btn_border btn_md">Annuler</button>
                </div>
            </div>
        </div>
    </div>
</div>
