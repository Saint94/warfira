@extends('frontend.layout.app')

@section('title', "S'identifier")

@section('content')

    <!-- Common Banner Area -->
    <section id="common_banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="common_bannner_text">
                        <h2>Inscrivez-vous</h2>
                        <ul>
                            <li><a href="{{ route('/') }}">Accueil</a></li>
                            <li><span><i class="fas fa-circle"></i></span> Inscrivez-vous</li>
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
                            <h2 style="color: #1E3A8A">Inscrivez-vous</h2>
                            <h4>Gérez et consultez à tout moment vos différents billets et hôtels reservés sur Warfira.</h4>
                        </div>

                        <div class="have_acount_area other_author_option">
                            <ul>
                                <li><a href="#!"><img src="{{asset('assets_frontend/img/icon/facebook.png') }}" alt="icon"></a> Facebook</li>
                                <li><a href="#!"><img src="{{asset('assets_frontend/img/icon/google.png') }}" alt="icon"></a> Google</li>
                            </ul>
                            <div class="line_or">
                                <span>Ou</span>
                            </div>
                        </div>

                        <div class="common_author_form">
                            <form action="{{ route('creer-compte.store') }}" method="POST" id="main_author_form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Nom(s) et Pr&eacute;nom(s)"/>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" id="tel" class="form-control @error('tel') is-invalid @enderror" name="tel" value="{{ old('tel') }}" placeholder="+237 699 66 44 55"/>
                                    @error('tel')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="magni@warfira.com"/>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="********************"/>
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-check write_spical_check">
                                    <input class="form-check-input" type="checkbox" name="condition_generale" id="condition_generale">
                                    <label class="form-check-label" for="condition_generale">
                                        J'accepte les termes et les <a href="#">conditions d'utilisation</a>
                                    </label>
                                </div>

                                <div class="checkbox_false" style="display: none;"></div>

                                <div class="common_form_submit">
                                    <button type="submit" class="btn btn_theme btn_md btn_creer_compte">Créer un compte</button>
                                </div>
                                <div class="have_acount_area other_author_option">
                                    <p>Vous avez déjà un compte ? <a href="{{ route('login') }}">Connectez-vous</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('add_scripts')

    <script type="text/javascript">
        /*$(document).ready(function() {

            $("input[name='condition_generale']").change(function()
             {
                var objet=$(".btn_creer_compte");
                 if($(this).prop("checked")==true)
                   {
                     objet.removeAttr("disabled");
                    }
                   else{
                   objet.attr("disabled",true);
                 }

             });


            if($("input[name='condition_generale']:checked").prop("checked")==true)
            {
                var objet=$(".btn_creer_compte");
                objet.removeAttr("disabled");
            }
            else
            {
            objet.attr("disabled",true);
            }

            var checkbox=$("input[name='condition_generale']");

            if(!checkbox.prop('checked'))
                $(".checkbox_false").append("<input type='text' value='false' name='condition_generale' >");
            else
                $("input[name='condition_generale']").val(true);

        });*/
    </script>


@endsection

