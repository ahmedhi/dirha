@extends('Master')

@section('content')

    <div style="background: url(img/hero-bg1.png); background-repeat: no-repeat ; background-attachment: fixed ; background-size: 100% 100%;"  >
        <div class="container" style="padding-top: 150px;">
            <div class="card" style="padding-bottom: 40px;border-radius: 40px;">
                <img src="img/articleBackground/{{$article->img}}" style="border-top-right-radius: 40px; border-top-left-radius: 40px;">
                <div style="padding-top: 50px;">
                    <h1 style="text-align: center; color: #f37f86">
                        {{ $article->title }}
                    </h1>

                    <div class="container" style="text-align: justify ; margin-top: 30px">
                        <div class="container">
                            {{ $article->description }}
                        </div>
                    </div>
                    <br><br>

                    <div class="avatar">
                        <center>  <p class="font-weight-bold">   <img src="UserImage/{{$article->users->img}}"  class="rounded-circle" style ="width: 50px ; height: 50px"> {{$article->users->nom}}</p></center>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col font-italic" style="color: #319b43 ; text-align: left">Source : {{$article->source}}</div>
                            <a class="col font-italic" href="articleVoirPlus?id={{$article->article_id}}" style=" text-decoration: none;color: #319b43 ; text-align: right" >Catégorie : {{$article->categorie}}</a>
                        </div>
                    </div>

                </div>

                <br><br><br><br>
            </div>
        </div>

    <br><br><br>

@endsection
