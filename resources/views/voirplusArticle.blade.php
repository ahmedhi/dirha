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

                    <div class="font-italic">
                        <div class="container">
                    <p class="text-primary" style="text-align: justify ; margin-top: 30px" >  Source : {{$article->source}}   </p>
                        </div>
                        <div class="text-right" >
                            <div class="container">
                    <p class="text-success" >    Catégorie : {{$article->categorie}} </p>
                       </div>

                    </div>
                </div>
            </div>

            <br><br><br><br>
        </div>
    </div>

@endsection
