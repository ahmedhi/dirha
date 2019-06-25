@extends('adminMaster')

@section('titlePage')
    Liste des Partenaires
@endsection

@section('content')
    <div class="table-responsive tablepadding">
        <table class="table">
            <thead class="tableTitle">
            <tr style=" text-align: center ;" >
                <th scope="col">ID</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NOM COMPLET</th>
                <th scope="col">TELEPHONE</th>
                <th scope="col">PAYS</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach( $users as $user)
                @if($user->type === 2)
                    <tr>
                        <th scope="col">{{ $user->id}}</th>
                        <th scope="col">{{ $user->email }}</th>
                        <th scope="col">{{ $user->nom }}</th>
                        <th scope="col">{{ $user->tel }}</th>
                        <th scope="col">{{ $user->pays }}</th>
                        <th>
                            <button type="button" class="VoirPlus" data-toggle="modal" data-target="#my{{$user->id}}	">
                                <i class="icon-update"> Voir plus </i>
                            </button>
                            <div class="modal fade" id="my{{$user->id}}" >
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg " style="width: 1000px">
                                    <div class="modal-content">

                                        <!-- Modal Header -->
                                        <div class="modal-header ">
                                            <h2 class="modal-title" style="margin-left: auto; margin-right: auto"> Informations Partenaires</h2>
                                        </div>

                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <div class="container">

                                                <center>

                                                    <form method="post" class="section" enctype="multipart/form-data" >

                                                        {{csrf_field()}}

                                                        <img src="img/FalloSolo.png" class="rounded-circle" width="150px" height="150px"><br><br>

                                                        <div class="row">

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input" >
                                                                    <span class="label-input100">Nom </span>
                                                                    <input class="input100" type="text" name="nom" value="{{$user->nom}}" disabled >
                                                                    <span class="focus-input100"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input" >
                                                                    <span class="label-input100">Adresse Email</span>
                                                                    <input class="input100" type="text" name="email" value="{{$user->email}}" disabled >
                                                                    <span class="focus-input100"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input">
                                                                    <span class="label-input100">Téléphone</span>
                                                                    <input class="input100" type="text" name="tel" value="{{$user->tel}}" disabled >

                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input" >
                                                                    <span class="label-input100">Date de naissance</span>
                                                                    <input class="input100" type="text" name="dateDeNaissance" value="{{$user->date_de_naissance}}" disabled >
                                                                    <span class="focus-input100"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input" >
                                                                    <span class="label-input100">Poids</span>
                                                                    <input class="input100" type="text" name="poids" value="{{$user->poids}}" disabled >
                                                                    <span class="focus-input100"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input">
                                                                    <span class="label-input100">Taille</span>
                                                                    <input class="input100" type="text" name="taille" value="{{$user->taille}}" disabled >

                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input" >
                                                                    <span class="label-input100">Sexe</span>
                                                                    <input class="input100" type="text" name="sexe" value="{{$user->sexe}}" disabled >
                                                                    <span class="focus-input100"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input" >
                                                                    <span class="label-input100">Diplome</span>
                                                                    <input class="input100" type="text" name="diplome" value="{{$user->part->diplome}}" disabled >
                                                                    <span class="focus-input100"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input">
                                                                    <span class="label-input100">Métier</span>
                                                                    <input class="input100" type="text" name="metier" value="{{$user->part->metier}}" disabled >

                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input" >
                                                                    <span class="label-input100">Experience</span>
                                                                    <textarea class="input100" name="experience" disabled>{{$user->part->experience}}</textarea>
                                                                    <span class="focus-input100"></span>
                                                                </div>
                                                            </div>

                                                            <div class="col">
                                                                <div class="wrap-input100 validate-input" >
                                                                    <span class="label-input100">Adresse</span>
                                                                    <textarea class="input100" name="adresse" disabled>{{$user->part->adresse}}</textarea>
                                                                    <span class="focus-input100"></span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </form>

                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </th>
                    </tr>
                @endif
            @endforeach




            </tbody>
        </table>
    </div>


@endsection