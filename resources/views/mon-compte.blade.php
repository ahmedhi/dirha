@extends('utilisateurMaster')

@section('contentutil')
        <div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(profil/images/nut.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="js-fullheight d-flex justify-content-center align-items-center">
                <div class="col-md-8 text text-center">
                    <div class="img mb-4" style="background-image: url(UserImage/{{auth()->user()->img}});"></div>
                    <div class="desc">
                        <h2 class="subheading">Bienvenue</h2>
                        <h1 class="mb-4">{{auth()->user()->nom}} </h1>
                        <p class="mb-4"> @if(auth()->user()->type == -1 )
                                Super User
                            @endif
                            @if(auth()->user()->type == 1)
                                Utilisateur Normal
                            @elseif(auth()->user()->type == 3)
                                Partenaire (Besoin de validation)
                            @elseif(auth()->user()->id == 0)
                                Admin
                            @elseif(auth()->user()->type == 2)
                                Partenaire
                            @endif
                        </p>

                    </div>
                </div>
            </div>
        </div>
@endsection