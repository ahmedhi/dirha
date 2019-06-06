


@extends('utilisateurMaster')
@section('content')
    <img src ="profil/images/nutri.jpg" width="100%" height="550xp" >
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container px-md-5">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Informations Personnels </h2>
                        <ul class="list-unstyled categories">

                            <li>Type de Compte :
                                @if(auth()->user()->type == -1 )
                                    Super User
                                @endif
                                @if(auth()->user()->type == 1)
                                    Utilisateur Normal
                                @endif
                                @if(auth()->user()->type == 3)
                                    Partenaire (Besoin de validation)
                                @endif
                                @if(auth()->user()->id == 0)
                                    Admin
                                @endif
                                @if(auth()->user()->type == 2)
                                    Partenaire
                                @endif
                            </li>
                            <li>Nom Complet : {{auth()->user()->nom}} </li>
                            <li>Date de Naissance : {{auth()->user()->date_de_naissance}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">.</h2>
                        <ul class="list-unstyled categories">
                            <li>Sexe : {{auth()->user()->sexe}} </li>
                            <li>Taille : {{auth()->user()->taille}} cm </li>
                            <li>Poids : {{auth()->user()->poids}} Kg</li>
                        </ul>
                    </div>
                </div>
                <table>
                    <tr style=" text-align: center ;" >
                        <th scope="col">ID</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">NOM COMPLET</th>
                        <th scope="col">TELEPHONE</th>
                        <th scope="col">PAYS</th>
                        <th scope="col">img</th>
                        <th scope="col">Poids</th>
                        <th scope="col">taille</th>
                        <th scope="col">DN</th>
                    </tr>
                    <tr>
                        <tl scope="col">{{ $users->id}}</tl>
                        <tl scope="col">{{ $users->email }}</tl>
                        <tl scope="col">{{ $users->nom }}</tl>
                        <tl scope="col">{{ $users->tel }}</tl>
                        <tl scope="col">{{ $users->pays }}</tl>
                        <tl scope="col">{{ $users->img }}</tl>
                        <tl scope="col">{{ $users->poids }}</tl>
                        <tl scope="col">{{ $users->taille }}</tl>
                        <tl scope="col">{{ $users->date_de_naissance }}</tl>
                    </tr>
                </table>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">.</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">{{auth()->user()->pays}}</span></li>
                                <li><span class="icon icon-phone"></span><span class="text">{{auth()->user()->tel}}</span></li>
                                <li><span class="icon icon-envelope"></span><span class="text">{{auth()->user()->email}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>


@endsection

