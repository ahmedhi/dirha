@extends ('Master')

@section('title')
    Utilisateurs
@endsection
@section('content')
            <h1> {{auth()->user()->email}} </h1>

            @if (auth()->check() AND auth()->user()->id === auth()->user()->id )

                <form action="/Bestarticles" method="post">

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
                        <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">Consiel</option>
                            <option value="2">Recette</option>
                            <option value="3">Citation</option>
                            <option value="3">Menu</option>
                            <option value="3">Diète</option>
                            <option value="3">Règime</option>
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