@extends ('Master')

@section('title')
    Utilisateurs
    @endsection

@section('content')
<div class="d-flex justify-content-center">
    <div class="container">
        <h1>Les utilisateurs</h1>

        <ul>
            @auth
                CONNECTER
            @else
            @foreach( $users as $user)

                <li>
                    <a
                            @if( auth()->check() && auth()->user()->id === $user->id)
                                style="background-color: cornflowerblue;
                                       color: #f7f7f7"
                            @endif
                            href="/{{ $user->email }}" > {{ $user->email }}</a>

                </li>

            @endforeach
                @endauth
        </ul>
    </div>
</div>


    @endsection