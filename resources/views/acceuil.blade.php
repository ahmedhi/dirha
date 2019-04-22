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
                <p class="card-text">{{$article->description}}</p>
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

    <div class="card text-center">

        <div class="card-body">
            <p class="text-sm-left">ASKOUR Hamza </p>
            <h5 class="card-title">Le régime végétarien </h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <p class="text-right">Source</p>
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
    <P> <br> </P>
    <div class="card text-center">

        <div class="card-body">
            <p class="text-sm-left">HILALI Ahmed  </p>
            <h5 class="card-title"> lmaklaaa </h5>
            <p class="card-text">
            <p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
            <p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
            <p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
            <p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>
            </p>
            <p class="text-right">Source</p>
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


@endsection



