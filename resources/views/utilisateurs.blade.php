@extends ('Master')

@section('title')
    Article
    @endsection

@section('content')
<div class="d-flex justify-content-center">
    <div class="container">
        <h1>Les utilisateurs</h1>

        <ul>

            @foreach( $users as $user)

                <li>

                         <a href="/article" > {{ $user->email }}</a>

                </li>

            @endforeach

        </ul>
    </div>
</div>


    @endsection