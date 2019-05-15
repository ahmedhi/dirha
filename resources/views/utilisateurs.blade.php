@extends ('Master')

@section('title')
    Utilisateurs
    @endsection

@section('content')
<div class="d-flex justify-content-center">
    <div class="container">
        <h1>Les utilisateurs</h1>

        <ul>

            @foreach( $users as $user)

                <li>

                         <a href="/00" > {{ $user->email }}</a>

                </li>

            @endforeach

        </ul>
    </div>
</div>


    @endsection