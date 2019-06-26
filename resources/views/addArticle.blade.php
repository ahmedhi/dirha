@extends ('articles')

@section('cssCustom')
    <link rel="stylesheet" href="css/article.css"/>
    @endsection

@section('form')
    <div style="    background-color: #f5f5f5; padding: 10px ; border-radius: 20px">
        <h4 style="text-align: center"> Publier avec notre communauté <br>@if(auth()->user()->sexe === "Homme")M. @else Mme. @endif {{auth()->user()->nom}} </h4>
        <br>
                <form action="/Bestarticles" method="post" enctype="multipart/form-data">

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

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Image </span>
                        </div>
                        <input type="file" class="form-control" placeholder="Image" name="img" aria-describedby="basic-addon1" style="height: auto;">

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
                            <option selected value="Conseil">Conseil</option>
                            <option value="Recette">Recette</option>
                            <option value="Citation">Citation</option>
                            <option value="Menu">Menu</option>
                            <option value="Diététique">Diététique</option>
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
    </div>


@endsection