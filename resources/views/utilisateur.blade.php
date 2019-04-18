@extends('Master')

@section('title')
    Utilisateur Page
@endsection

@section('content')
    <div class="section">
        <h1 class="title is-1">{{ $user->email }}</h1>

        @if( auth()->check() AND auth()->user()->id === $user->id)

            <form action="/messages" method="post">
                {{ csrf_field() }}

                <div class="field">
                    <label class="label">Message</label>
                    <div class="control">
                        <textarea class="textarea" name="message" placeholder="Qu'avez vous à dire ? "></textarea>
                    </div>
                    @if($errors->has('message'))
                        <p class="help is-danger">
                            {{ $errors->first('message') }}
                        </p>
                    @endif
                </div>

                <div class="field">
                    <div class="control" style="
                                        margin-left: 10%;
                                        margin-right: 10%;
                                        text-align: center;">
                        <button type="submit" class="button is-link">Publier</button>
                    </div>
                </div>
            </form>

        @endif

        @foreach( $user->messages as $message)

            <hr width="50%">

            <strong>
                {{ $message->created_at }}
            </strong>

            <p>
                {{ $message->contenu }}
            </p>

        @endforeach

    </div>
@endsection
