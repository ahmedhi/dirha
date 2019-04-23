@extends ('Master')

@section('title')
    Acceuil
@endsection

@section('content')

    @foreach( $articles as $article)

        <div class="card text-center">

            <div class="card-body">
                <p class="text-sm-left">{{ $article->id_partenaire }} </p>
                <h5 class="card-title">{{ $article->title }} </h5>
                <p class="text-left">{{$article->description}}</p>
                <p class="text-right">{{$article->source}}</p>
            </div>
            <br>
            <div class="card-header">
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



