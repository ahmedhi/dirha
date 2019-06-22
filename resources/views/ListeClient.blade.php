@extends('adminMaster')

@section('titlePage')
        Liste des Utilisateurs
@endsection

@section('content')
        <div class="table-responsive tablepadding">
            <table class="table">
                <thead class="tableTitle">
                <tr style=" text-align: center ;" >
                    <th scope="col">ID Utilisateur</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Taille</th>
                    <th scope="col">Poids</th>
                    <th scope="col">sexe</th>
                    <th scope="col">pays</th>
                    <th scope="col">Date de naissance</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $users as $user)
                    @if( $user->type === 1 || $user->type === 3)
                        <tr>
                            <th scope="col">{{ $user->id }}</th>
                            <th scope="col">{{ $user->email }}</th>
                            <th scope="col">{{ $user->nom }}</th>
                            <th scope="col">{{ $user->tel }}</th>
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

@endsection