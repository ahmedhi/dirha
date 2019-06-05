@extends('adminMaster')

@section('content')
	<div class="table-responsive">
		<table class="table">
			<thead class="thead-dark">
			<tr style=" text-align: center ;" >
				<th scope="col">ID</th>
				<th scope="col">EMAIL</th>
				<th scope="col">NOM COMPLET</th>
				<th scope="col">TELEPHONE</th>
				<th scope="col">PAYS</th>
				<th>Accepter</th>
				<th>Refuser</th>
			</tr>
			</thead>
			<tbody>
			@foreach( $users as $user)
				@if($user->type === 3)
					<tr>
						<th scope="col">{{ $user->id}}</th>
						<th scope="col">{{ $user->email }}</th>
						<th scope="col">{{ $user->nom }}</th>
						<th scope="col">{{ $user->tel }}</th>
						<th scope="col">{{ $user->pays }}</th>
						<th scope="col"> <a href="/accept/{{ $user->id }}">Accepter</a></th>
						<th scope="col"> <a href="/delete/{{ $user->id }}">Supprimer</a></th>
						<th> <a href="/infosPartenaire/{{$user->id}}">Voir plus</a></th>
					</tr>
				@endif
			@endforeach
			</tbody>
		</table>
	</div>

@endsection
