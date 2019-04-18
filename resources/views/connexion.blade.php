@extends('LogMaster')

@section('title')
    Connexion
@endsection

@section('cardHeader')
    <h3>Se connecter</h3>
@endsection

@section('content')

    <form method="post" action="connexion">

        {{ csrf_field() }}

        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Adresse Mail" value="{{ old('email') }}" name="email">
        </div>
            <!-- Gestion d'erreur pour l'adresse Mail -->
            @if( $errors->has('email'))

                <p class="help is-danger">
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

                <p class="help is-danger">
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
