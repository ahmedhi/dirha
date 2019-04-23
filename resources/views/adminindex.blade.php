@extends('adminMaster')

@section('title')
    Page d'Administration
@endsection

@section('content')

    <table class="table">
        <thead class="thead-dark">
        <tr style=" text-align: center ;" >
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

    <br><br><br>

    <table class="table" style="margin-left: -20%">
        <thead class="thead-dark">
        <tr style=" text-align: center ;" >
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

@endsection