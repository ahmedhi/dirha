@extends('adminMaster')

@section('Content-fluid')
    <div class="panel-header panel-header-lg">
        <canvas id="bigDashboardChart"></canvas>
    </div>
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
            <th scope="col">ID UTILISATEUR</th>
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
            <tr>
                <th scope="col">{{ $user->id}}</th>
                <th scope="col">{{ $user->email }}</th>
                <th scope="col">{{ $user->user_Name }}</th>
                <th scope="col">{{ $user->tel }}</th>
                <th scope="col">{{ $user->taille }}</th>
                <th scope="col">{{ $user->poids }}</th>
                <th scope="col">{{ $user->sexe }}</th>
                <th scope="col">{{ $user->pays }}</th>
                <th scope="col">{{ $user->date_de_naissance }}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <br><br><br>

    <h3 style="text-align: center">Liste des Partenaires</h3>

        <div class="table-responsive">
    <table class="table">
        <thead class="tableTitle">
        <tr>
            <th scope="col">ID UTILISATEUR</th>
            <th scope="col">EMAIL</th>
            <th scope="col">NOM COMPLET</th>
            <th scope="col">TELEPHONE</th>
            <th scope="col">TAILLE</th>
            <th scope="col">POIDS</th>
            <th scope="col">SEXE</th>
            <th scope="col">PAYS</th>
            <th scope="col">DIPLOME</th>
            <th scope="col">METIER</th>
            <th scope="col">EXPERIENCE</th>
            <th scope="col">ADRESSE</th>
            <th scope="col">DATE DE NAISSANCE</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $parts as $part)
            <tr>
                <th scope="col">{{ $part->id}}</th>
                <th scope="col">{{ $part->email }}</th>
                <th scope="col">{{ $part->part_Name }}</th>
                <th scope="col">{{ $part->tel }}</th>
                <th scope="col">{{ $part->taille }}</th>
                <th scope="col">{{ $part->poids }}</th>
                <th scope="col">{{ $part->sexe }}</th>
                <th scope="col">{{ $part->pays }}</th>
                <th scope="col">{{ $part->diplome }}</th>
                <th scope="col">{{ $part->metier }}</th>
                <th scope="col">{{ $part->experience }}</th>
                <th scope="col">{{ $part->adresse }}</th>
                <th scope="col">{{ $part->date_de_naissance }}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>

@if(auth()->user()->type === -1)
    <h3 style="text-align: center">Liste des Administrateurs</h3>
    <div class="table-responsive">
            <table class="table">
                <thead class="tableTitle">
                <tr>
                    <th scope="col">ID UTILISATEUR</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NOM COMPLET</th>
                    <th scope="col">TELEPHONE</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $admins as $admin)
                    <tr>
                        <th scope="col">{{ $admin->id}}</th>
                        <th scope="col">{{ $admin->email }}</th>
                        <th scope="col">{{ $admin->admin_Name }}</th>
                        <th scope="col">{{ $admin->tel }}</th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endif

@endsection