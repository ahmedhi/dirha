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
				<th>Voir plus</th>
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
						<th>
							<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#{{$user->id}}">
								<i class="icon-update"> Voir plus </i>
							</button>
							<div class="modal fade" id="{{$user->id}}" >
								<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-s">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header ">
											<h2 class="modal-title" style="margin-left: auto; margin-right: auto">Informations Partenaires</h2>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<div class="container">
												<center>
													<form method="post" class="section" enctype="multipart/form-data" >

													{{csrf_field()}}


													<!-- Nom Complet-->
														<div class="input-group form-group">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fas fa-user"></i></span>
															</div>
															<input type="text" class="form-control" name="nom_complet" value="{{ $user->nom}}" >
														</div>
														<!-- Nom Complet-->
														<div class="input-group form-group">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fas fa-user"></i></span>
															</div>
															<input type="text" class="form-control" name="nom_complet" value="{{ $user->nom}}" >
														</div>

													<!-- tel -->
														<div class="input-group form-group">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fas fa-mobile"></i></span>
															</div>
															<input  type="tel"
																	class="form-control" name="num"
																	placeholder="Numero de Téléphone"
																	value="{{ $user->tel }}"
																	pattern="0[0-9]{9}"
															>
														</div>


													<!-- Date de naissance -->
														<div class="input-group form-group">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fas fa-calendar-alt "></i></span>
															</div>
															<input type="date" class="form-control" name="date" placeholder="Date de naissance" value="{{ $user->date_de_naissance }}">
														</div>


													<!-- Poids -->
														<div class="input-group form-group">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fas fa-weight"></i></span>
															</div>
															<input type="text" class="form-control" name="poids" placeholder="Poids (kg)" value="{{ $user->poids }}">
														</div>


													<!-- Taille -->
														<div class="input-group form-group">
															<div class="input-group-prepend">
																<span class="input-group-text"><i class="fas fa-ruler-vertical"></i></span>
															</div>
															<input type="text" class="form-control" name="taille" placeholder="Taille (cm)" value="{{ $user->taille}}">
														</div>


													<!-- Boutton de confirmation -->
														<center>
															<div class="form-group">
																<button type="submit" class="btn btn-info">Enregistrer modification</button>
																<form action="/modifInfos"> <button type="submit" class="btn btn-info">Retour</button></form>
															</div>
														</center>

													</form>

												</center>
											</div>
										</div>
									</div>
								</div>
							</div>
				</th>
					</tr>
				@endif
			@endforeach




			</tbody>
		</table>
	</div>



@endsection
