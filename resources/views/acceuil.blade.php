@extends ('Master')

@section('title')
    Acceuil
@endsection

@section('content')

    @foreach( $articles as $article )

        <div class="card text-center">

            <div class="card-body">
                <p class="text-sm-left font-weight-bold">
                    <img src="UserImage/{{$article->users->img}}"  class="rounded-circle" width="50xp" height="50xp"> {{$article->users->nom}}
                </p>
                <h5 class="card-title font-weight-bold">{{ $article->title }} </h5>
                <p class="text-left font-italic">categorie : {{$article->categorie}}</p>
                <p class="text-left">{{$article->description}}</p>
                <p class="text-right font-italic">{{$article->source}}</p>

            </div>
            <br>
            <div class="card-footer">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Like</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dislike</a>
                    </li>

                </ul>
            </div>
        </div>

    @endforeach


@endsection



