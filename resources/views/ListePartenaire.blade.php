@extends('adminMaster')

@section('title')
    Page d'Administration
@endsection

@section('content')
    <div class="table-responsive">
    <table class="table">
        <thead class="thead-dark">
        <tr style=" text-align: center ;" >
            <th scope="col">ID</th>
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
        @foreach( $users as $user)
            @if($user->type === 2)
                <tr>
                    <th scope="col">{{ $user->id}}</th>
                    <th scope="col">{{ $user->email }}</th>
                    <th scope="col">{{ $user->nom }}</th>
                    <th scope="col">{{ $user->tel }}</th>
                    <th scope="col">{{ $user->taille }}</th>
                    <th scope="col">{{ $user->poids }}</th>
                    <th scope="col">{{ $user->sexe }}</th>
                    <th scope="col">{{ $user->pays }}</th>
                    <th scope="col">{{ $user->part->diplome }}</th>
                    <th scope="col">{{ $user->part->metier }}</th>
                    <th scope="col">{{ $user->part->experience }}</th>
                    <th scope="col">{{ $user->part->adresse }}</th>
                    <th scope="col">{{ $user->date_de_naissance }}</th>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
    </div>

@endsection