@extends('LogMaster')

@section('title')
    Inscription
@endsection

@section('cardHeader')
    <h3>Inscrivez vous</h3>
@endsection

@section('content')
        <form method="post" class="section">

            {{csrf_field()}}

            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                <input type="text" class="form-control" name="email" placeholder="Adresse Mail" value="{{ old('email') }}">
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

            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Mot de passe de confirmation" name="password_confirmation">
            </div>
                @if( $errors->has('password_confirmation'))

                    <p class="help is-danger">
                        {{ $errors->first('password_confirmation') }}
                    </p>

                @endif

            <br>
            <center>
                <div class="form-group">
                    <input type="submit" value="S'inscrire" class="btn login_btn">
                </div>
            </center>

        </form>

    @endsection