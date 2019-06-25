@extends ('Master')

@section('title')
    Acceuil
@endsection

@section('content')
<div style="background: url(img/hero-bg1.png); background-repeat: no-repeat ; background-attachment: fixed ; background-size: 100% 100%;"  >
    <div class="container" style="padding-top: 150px;">


        <div class="row">
            <div class="col">

                @foreach( $articles as $article )

                    <div class="card text-center" style="border-radius: 20px">

                        <div class="card-body">
                            <p class="text-sm-left font-weight-bold">
                                <img src="UserImage/{{$article->users->img}}"  class="rounded-circle" width="50xp" height="50xp"> {{$article->users->nom}}
                            </p>
                            <h5 class="card-title font-weight-bold">{{ $article->title }} </h5>
                            <div class="row">
                                <div class="col font-italic" style="color: #319b43 ; text-align: left">Catégorie : {{$article->categorie}}</div>
                                <a class="col font-italic" href="#" style=" text-decoration: none;color: #319b43 ; text-align: right" >Voir l'article...</a>
                            </div>
                            <br>
                            <p class="text-left textarticle" >{{$article->description}}</p>
                            <p class="text-right font-italic source">{{$article->source}}</p>

                        </div>
                        <br>
                    </div>
                    <br>

                @endforeach

            </div>

            <div class="col-sm-4" >

                @yield('form')

                <br>

                <img class="imgADS" src="img/ADSFallo.png">

                <img class="imgADS" src="img/ADSHan.jpg">


            </div>

        </div>

    </div>
    <br>

</div>
@endsection



