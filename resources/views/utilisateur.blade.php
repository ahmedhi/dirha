@extends ('Master')

@section('title')
    Utilisateurs
@endsection
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
@section('content')
            <h1> {{$user->email}} </h1>

            @if (auth()->check() AND auth()->user()->id === $user->id )

                <form action="/00" method="post">

                    {{ csrf_field() }}

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Titre </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Titre" name="title" aria-describedby="basic-addon1">

                    </div>
                        @if($errors->has('title'))
                            <p>Ce champs est obligatoire </p>
                        @endif
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Article</span>
                        </div>
                        <textarea class="form-control" name="article"></textarea>
                    </div>
                    <br>
                    @if($errors->has('article'))
                        <p>Ce champs est obligatoire </p>
                    @endif
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Catégorie</label>
                        </div>
                        <select class="custom-select" name="categorie">
                            <option selected>Choose...</option>
                            <option value="Consiel">Consiel</option>
                            <option value="Recette">Recette</option>
                            <option value="Citation">Citation</option>
                            <option value="Menu">Menu</option>
                            <option value="Diete">Diète</option>
                            <option value="Regime">Règime</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Source</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" name="source" aria-describedby="basic-addon3">
                    </div>

                @if($errors->has('source'))
                            <p>   {{ $errors->first('article')}} </p>
                        @endif

                    <button type="submit" class="btn btn-primary">Publier</button>

                </form>

            @endif

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
@endsection