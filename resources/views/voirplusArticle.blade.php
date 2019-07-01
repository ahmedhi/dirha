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
                </div>
            </div>

            <br><br><br><br>
        </div>
    </div>

@endsection
