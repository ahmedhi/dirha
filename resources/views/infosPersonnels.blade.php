@extends('utilisateurMaster')
@section('contentutil')
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
                    @auth()
                        @if( auth()->user()->type === 1 or auth()->user()->type === 2 or auth()->user()->type === 3)
                        <div class="col-md">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Métabolisme</h2>
                                <ul class="list-unstyled categories">
                                    <li>Sexe : {{auth()->user()->sexe}} </li>
                                    <li>Taille : {{auth()->user()->taille}} cm </li>
                                    <li>Poids : {{auth()->user()->poids}} Kg</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md">
                                <div class="ftco-footer-widget mb-4">
                                    <h2 class="ftco-heading-2">Objectif</h2>
                                    <ul class="list-unstyled categories">
                                        <li>Type d'Evolution :
                                        @switch( auth()->user()->TypeEvolution )
                                            @case(0)
                                                Perte de poids
                                            @break

                                            @case(1)
                                                Stabilisation de poids
                                            @break

                                            @default
                                                Prendre du poids
                                        @endswitch
                                        </li>
                                        <li>Type d'Activité :
                                            @switch( auth()->user()->TypeActivite )
                                                @case(0)
                                                    Travail de bureau et une faible dépense sportive
                                                @break

                                                @case(1)
                                                    Entrainement de 1 à 3 fois par semaine
                                                @break

                                                @case(2)
                                                    Entrainement de 4 à 6 fois par semaine
                                                @break

                                                @default
                                                    Entrainement plus de 6 fois par semaine
                                            @endswitch
                                        </li>
                                    </ul>
                                </div>
                        </div>
                        @endif
                    @endauth
                    <div class="col-md">
                        <div class="ftco-footer-widget mb-4">
                            @auth()
                                @if( auth()->user()->type === 2 or auth()->user()->type === 3)
                            <h2 class="ftco-heading-2">Coordonées</h2>
                            <div class="block-23 mb-3">
                                <ul>
                                    <li><span class="icon icon-map-marker"></span><span class="text">{{auth()->user()->pays}}</span></li>
                                    <li><span class="icon icon-phone"></span><span class="text">{{auth()->user()->tel}}</span></li>
                                    <li><span class="icon icon-envelope"></span><span class="text">{{auth()->user()->email}}</span></li>
                                </ul>
                            </div>
                                @endif

                            @endauth
                        </div>
                    </div>

                </div>
            </div>
        </footer>

      
@endsection