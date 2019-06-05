@extends('LogMaster')

@section('title')
    Connexion
@endsection

@section('cssCustom')
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles et Jquey-->
    <link rel="stylesheet" type="text/css" href="css/Login.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@endsection

@section('cardHeader')
    <h3>Se connecter</h3>
@endsection

@section('contentLog')

    <form method="post" >

        {{ csrf_field() }}

        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Adresse Mail" value="{{ old('email') }}" name="email">
        </div>
        <!-- Gestion d'erreur pour l'adresse Mail -->
        @if( $errors->has('email'))

            <p class="erreur">
                {{ $errors->first('email') }}
            </p>

        @endif
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
        <br>
        <center>
            <div class="form-group">
                <input type="submit" value="Se connecter" class="btn login_btn">
            </div>
        </center>
    </form>
    </div>

@endsection


@section('SpecFooter')
    <div class="d-flex justify-content-center links">
        Vous n'avez pas de compte ?
    </div>
    <div class="d-flex justify-content-center links">
        <a href="inscription">Inscrivez-vous !</a>
    </div>
@endsection
