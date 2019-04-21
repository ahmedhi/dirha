@extends ('Master')

@section('title')
    Utilisateurs
@endsection

@section('content')
    <div class="d-flex justify-content-center">
        <div class="container">
            <h1> {{$user->email}} </h1>

            @if (auth()->check() AND auth()->user()->id === $user->id )

                <form action="/articles" method="post">

                    {{ csrf_field() }}
                    <div class="field">
                        <label class="label"> Article </label>
                        <div class="control">
                            <textarea class="textarea" name="article" placeholder="Qu'avez-vous à écrire ,"></textarea>
                        </div>
                        @if($errors->has('article'))
                            <p class="help is-danger">   {{ $errors->first('article')}} </p>
                        @endif
                    </div>


                    <div class="field ">
                        <div class="control">
                            <button class="button is-link" type="submit">Publier</button>
                        </div>
                    </div>



                </form>

            @endif

        </div>
    </div>


@endsection