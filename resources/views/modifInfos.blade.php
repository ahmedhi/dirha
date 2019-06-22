@extends('utilisateurMaster')

@section('contentutil')


    <div>
        <div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(profil/images/nut.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="js-fullheight d-flex justify-content-center align-items-center">
                <div class="col-md-8 text text-center" >



                    <!-- Button to Open the Modal -->
                <div>
                    <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">
                        <i class="icon-update"> Changer le mot de passe  </i>
                    </button>
                </div>
                    <br><br>
                    <div>
                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#my">
                            <i class="icon-update"> Modifier les informations Personnels </i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header ">
                                    <h2 class="modal-title" style="margin-left: auto; margin-right: auto">Changer le mot de passe </h2>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                            <div>
                                            <form method="post" class="section" enctype="multipart/form-data" action="/mp">

                                            {{csrf_field()}}



                                            <!-- Mot de passe -->
                                                <div class="input-group form-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                    </div>
                                                    <input type="password" class="form-control" placeholder="Ancien Mot de passe" name="ancienPassword">

                                                </div>
                                                <div class="input-group form-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                    </div>
                                                    <input type="password" class="form-control" placeholder="Nouveau Mot de passe" name="password">

                                                </div>
                                                <!-- Gestion d'erreur pour le mot de passe -->
                                                @if( $errors->has('password'))
                                                    <p class="erreur">
                                                        {{ $errors->first('password') }}
                                                    </p>

                                                @endif

                                            <!-- Mot de passe de confirmation-->
                                                <div class="input-group form-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                    </div>
                                                    <input type="password" class="form-control" placeholder="Mot de passe de confirmation" name="password_confirmation">
                                                </div>

                                                <!-- Gestion d'erreur pour le mot de passe de confirmation-->
                                                @if( $errors->has('password_confirmation'))

                                                    <p class="erreur">
                                                        {{ $errors->first('password_confirmation') }}
                                                    </p>

                                                @endif


                                            <!-- Boutton de confirmation -->
                                                <center>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-info">Enregistrer modification</button>
                                                    </div>
                                                </center>
                                            </form>
                                        </div>

                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>







                    <div class="modal fade" id="my" >
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-s">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header ">
                                    <h2 class="modal-title" style="margin-left: auto; margin-right: auto">Modifier les informations Personnels</h2>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="container">
                                       <center>
                                          <form method="post" class="section" enctype="multipart/form-data"  action="/mi">

                                            {{csrf_field()}}


                                                <!-- Nom Complet-->
                                                <div class="input-group form-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="nom_complet" value="{{ auth()->user()->nom }}" >
                                                </div>

                                                <!-- Gestion d'erreur pour le Nom -->
                                                @if( $errors->has('nom_complet'))
                                                    <p class="erreur">
                                                        {{ $errors->first('nom_complet') }}
                                                    </p>

                                                @endif

                                            <!-- Numero de téléphone -->
                                                <div class="input-group form-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                                                    </div>
                                                    <input  type="tel"
                                                            class="form-control" name="num"
                                                            placeholder="Numero de Téléphone"
                                                            value="{{ auth()->user()->tel }}"
                                                            pattern="0[0-9]{9}"
                                                    >
                                                </div>

                                                <!-- Gestion d'erreur pour le num -->
                                                @if( $errors->has('num'))
                                                    <p class="erreur">
                                                        {{ $errors->first('num') }}
                                                    </p>

                                                @endif

                                            <!-- Date de naissance -->
                                                <div class="input-group form-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-calendar-alt "></i></span>
                                                    </div>
                                                    <input type="date" class="form-control" name="date" placeholder="Date de naissance" value="{{ auth()->user()->date_de_naissance }}">
                                                </div>

                                                <!-- Gestion d'erreur pour le date -->
                                                @if( $errors->has('date'))
                                                    <p class="erreur">
                                                        {{ $errors->first('date') }}
                                                    </p>

                                                @endif

                                            <!-- Poids -->
                                                <div class="input-group form-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-weight"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="poids" placeholder="Poids (kg)" value="{{ auth()->user()->poids }}">
                                                </div>

                                                <!-- Gestion d'erreur pour le poids -->
                                                @if( $errors->has('poids'))
                                                    <p class="erreur">
                                                        {{ $errors->first('poids') }}
                                                    </p>

                                                @endif

                                            <!-- Taille -->
                                                <div class="input-group form-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-ruler-vertical"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" name="taille" placeholder="Taille (cm)" value="{{ auth()->user()->taille}}">
                                                </div>

                                                <!-- Gestion d'erreur pour le poids -->
                                                @if( $errors->has('taille'))
                                                    <p class="erreur">
                                                        {{ $errors->first('taille') }}
                                                    </p>

                                            @endif

                                            <!-- Boutton de confirmation -->
                                                <center>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-info">Enregistrer modification</button>
                                                        <form action="/modifInfos"> <button type="submit" class="btn btn-info">Retour</button></form>
                                                    </div>
                                                </center>

                                            </form>

                                       </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

@endsection