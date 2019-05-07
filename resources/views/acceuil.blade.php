@extends ('Master')

@section('title')
    Acceuil
@endsection

@section('content')

    @foreach( $ArtParts as $ArtPart )

        <div class="card text-center">

            <div class="card-body">
                <p class="text-sm-left font-weight-bold">
                    {{ $ArtPart->part_Name }}
                </p>
                <h5 class="card-title font-weight-bold">{{ $ArtPart->title }} </h5>
                <p class="text-left">{{$ArtPart->description}}</p>
                <p class="text-right font-italic">{{$ArtPart->source}}</p>
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



