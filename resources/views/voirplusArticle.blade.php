@extends ('Master')

@section('title')
    Acceuil
@endsection

@section('content')






    {{ $articles->title }}
    {{ $articles->description }}
    {{$articles->article_id}}
    {{$articles->users->img}}
    {{$articles->users->nom}}
    {{$articles->source}}





    <div style="background: url(img/hero-bg1.png); background-repeat: no-repeat ; background-attachment: fixed ; background-size: 100% 100%;"  >
        <div class="container" style="padding-top: 150px;">


            <div class="row">
                <div class="col">

                        <div class="card text-center" style="border-radius: 20px">

                            <div class="card-body">
                                <p class="text-sm-left font-weight-bold">
                                    <img src="UserImage/{{$articles->users->img}}"  class="rounded-circle" width="50xp" height="50xp"> {{$articles->users->nom}}
                                </p>
                                <h5 class="card-title font-weight-bold">{{ $articles->title }} </h5>
                                <div class="row">
                                    <div class="col font-italic" style="color: #319b43 ; text-align: left">Catégorie : {{$articles->categorie}}</div>
                                    <a class="col font-italic" href="#" style=" text-decoration: none;color: #319b43 ; text-align: right" >Voir l'article...</a>
                                </div>
                                <br>
                                <p class="text-left textarticle" >{{$articles->description}}</p>
                                <p class="text-right font-italic source">{{$articles->source}}</p>

                            </div>
                            <br>
                        </div>
                        <br>



                </div>

                <div class="col-sm-4" >



                    <br>

                    <img class="imgADS" src="img/ADSFallo.png">

                    <img class="imgADS" src="img/ADSHan.jpg">


                </div>

            </div>

        </div>
        <br>

    </div>
@endsection