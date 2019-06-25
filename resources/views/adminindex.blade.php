@extends('adminMaster')

@section('Content-fluid')
    <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
    </div>
@endsection

@section('titlePage')
    Bonjour {{auth()->user()->nom}}
@endsection

@section('content')
    <div class="row" style="padding-top: -120px">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">FALLO Statitique</h5>
                    <h4 class="card-title">Visite Hebdomadaire</h4>
                    <div class="dropdown">
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="lineChartExample"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i> A jour
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">FALLO Statitique</h5>
                    <h4 class="card-title">Nombre de Partenaire</h4>
                    <div class="dropdown">
                        <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
                            <i class="now-ui-icons loader_gear"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Visualiser la liste des clients</a>
                            <a class="dropdown-item text-danger" href="#">DANGER</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons arrows-1_refresh-69"></i>A jour
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Publication</h5>
                    <h4 class="card-title">Nombre de Publications</h4>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="barChartSimpleGradientsNumbers"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="stats">
                        <i class="now-ui-icons ui-2_time-alarm"></i>Depuis 7 jours
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <h3 style="text-align: center">Liste des Utilisateurs</h3>
    <div class="table-responsive">
    <table class="table">
        <thead class="tableTitle">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NOM COMPLET</th>
            <th scope="col">TELEPHONE</th>
            <th scope="col">TAILLE</th>
            <th scope="col">POIDS</th>
            <th scope="col">SEXE</th>
            <th scope="col">PAYS</th>
            <th scope="col">DATE DE NAISSANCE</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $users as $user)
            @if( $user->type === 1 || $user->type === 3)
            <tr>
                <th scope="col">{{ $user->id}}</th>
                <th scope="col">{{ $user->email }}</th>
                <th scope="col">{{ $user->nom }}</th>
                <th scope="col">{{ $user->tel }}</th>f
                <th scope="col">{{ $user->taille }}</th>
                <th scope="col">{{ $user->poids }}</th>
                <th scope="col">{{ $user->sexe }}</th>
                <th scope="col">{{ $user->pays }}</th>
                <th scope="col">{{ $user->date_de_naissance }}</th>
            </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    </div>
    <br><br><br>

    <h3 style="text-align: center">Liste des Partenaires</h3>

    <div class="table-responsive" >
        <table class="table">
            <thead class="tableTitle">
            <tr style=" text-align: center ;" >
                <th scope="col">ID</th>
                <th scope="col">EMAIL</th>
                <th scope="col">NOM COMPLET</th>
                <th scope="col">TELEPHONE</th>
                <th scope="col">PAYS</th>
                <th>Accepter</th>
                <th>Refuser</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach( $users as $user)
                @if($user->type === 3)
                    <tr>
                        <th scope="col">{{ $user->id}}</th>
                        <th scope="col">{{ $user->email }}</th>
                        <th scope="col">{{ $user->nom }}</th>
                        <th scope="col">{{ $user->tel }}</th>
                        <th scope="col">{{ $user->pays }}</th>
                        <th scope="col"> <a class="VoirPlus" href="/accept/{{ $user->id }}">Accepter</a></th>
                        <th scope="col"> <a class="VoirPlus" href="/delete/{{ $user->id }}">Supprimer</a></th>
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
                                                        <div class="row">
                                                            <div class="container-contact100-form-btn">
                                                                <div class="col">
                                                                    <a href="/accept/{{ $user->id }}" class="contact100-form-btn">
																			<span>
																				Accepter
																				<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
																			</span>
                                                                    </a>
                                                                </div>
                                                                <div class="col">
                                                                    <a class="contact100-form-btn" href="/delete/{{ $user->id }}">
																			<span>
																				Supprimer
																				<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
																			</span>
                                                                    </a>
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

    @if(auth()->user()->type === -1)
    <h3 style="text-align: center">Liste des administrateurs</h3>
    <div class="table-responsive">
            <table class="table">
                <thead class="tableTitle">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NOM COMPLET</th>
                    <th scope="col">TELEPHONE</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $users as $user)
                    @if( $user->type === 0)
                    <tr>
                        <th scope="col">{{ $user->id}}</th>
                        <th scope="col">{{ $user->email }}</th>
                        <th scope="col">{{ $user->nom }}</th>
                        <th scope="col">{{ $user->tel }}</th>
                    </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection