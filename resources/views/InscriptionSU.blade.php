@extends('LogMaster')

@section('title')
    Inscription
@endsection

@section('cardHeader')
    <h3>Inscrivez vous</h3>
@endsection

@section('content')

    <center><h3 style="color: white">SuperUser</h3></center>

    <form method="post" class="section " enctype="multipart/form-data">

    {{csrf_field()}}


    <!-- Email -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
            </div>
            <input type="text" class="form-control" name="email" placeholder="Adresse Mail" value="{{ old('email') }}">
        </div>

        <!-- Gestion d'erreur pour l'adresse Mail -->
        @if( $errors->has('email'))

            <p class="erreur">
                {{ $errors->first('email') }}
            </p>

        @endif

    <!-- Mot de passe -->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key"></i></span>
            </div>
            <input type="password" class="form-control" placeholder="Mot de passe" name="password">

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

        <br>

        <!-- Nom Complet-->
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" name="nom_complet" placeholder="Nom Complet" value="{{ old('nom_complet') }}">
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
                    value="{{ old('num') }}"
                    pattern="0[0-9]{9}"
            >
        </div>

        <!-- Gestion d'erreur pour le num -->
        @if( $errors->has('num'))
            <p class="erreur">
                {{ $errors->first('num') }}
            </p>

    @endif

    <!-- Boutton de confirmation -->
        <center>
            <div class="form-group">
                <input type="submit" value="S'inscrire" class="btn login_btn">
            </div>
        </center>

    </form>

@endsection
