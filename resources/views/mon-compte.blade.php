@extends('Xmaster')

@section('title')
    mon compte
@endsection

@section('content')

    <form method="post" action="/modification-mot-de-passe" class="section">
        {{csrf_field()}}

        <div class="field">
            <label class="label">Nouveau mot de passe</label>
            <div class="control">
                <input class="input" type="password" name="password">
            </div>
            @if( $errors->has('password'))

                <p class="help is-danger">
                    {{ $errors->first('password') }}
                </p>

            @endif
        </div>

        <div class="field">
            <label class="label">Nouveau Mot de passe (confirmation)</label>
            <div class="control">
                <input class="input" type="password" name="password_confirmation">
            </div>
            @if( $errors->has('password_confirmation'))

                <p class="help is-danger">
                    {{ $errors->first('password_confirmation') }}
                </p>

            @endif
        </div>

        <div class="field">
            <div class="control" style="
                                        margin-left: 10%;
                                        margin-right: 10%;
                                        text-align: center;">
                <button class="button is-link" type="submit">Modifier Mot de passe</button>
            </div>
        </div>
    </form>
@endsection