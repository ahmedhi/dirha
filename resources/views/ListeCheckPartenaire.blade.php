@extends('adminMaster')

@section('refsheet')

	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="email/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="email/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="email/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="email/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="email/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="email/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="email/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="email/css/util.css">
	<link rel="stylesheet" type="text/css" href="email/css/main.css">

	@endsection

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
						<th>
							<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#my{{$user->id}}	">
								<i class="icon-update"> Voir plus </i>
							</button>
							<div class="modal fade" id="my{{$user->id}}" >
								<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg " style="width: 1000px">
									<div class="modal-content">

										<!-- Modal Header -->
										<div class="modal-header ">
											<h2 class="modal-title" style="margin-left: auto; margin-right: auto"> Informations Partenaires</h2>
										</div>

										<!-- Modal body -->
										<div class="modal-body">
											<div class="container">

												<center>

													<form method="post" class="section" enctype="multipart/form-data" >

													{{csrf_field()}}
														<table width="1500px" >
																<img src="img/FalloSolo.png" class="rounded-circle" width="150px" height="150px"><br><br>
															<td>
														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Nom </span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->nom}}" disabled width="100%">
															<span class="focus-input100"></span>
														</div>
																</td><td>

														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" >
															<span class="label-input100">Email</span>
															<input class="input100" type="text" name="email" placeholder="Enter your email addess"value="{{$user->email}}" disabled width="100%">
															<span class="focus-input100"></span>
														</div>
																</td>	<td>
														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Tel</span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->tel}}" disabled >
															<span class="focus-input100"></span>
														</div>
																</td><tr>
																<td>
														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Date de Naissance </span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->date_de_naissance}}" disabled >
															<span class="focus-input100"></span>
														</div>
																</td>	<td>
														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Poids </span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->poids}}" disabled >
															<span class="focus-input100"></span>
														</div>
																</td><td>
														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Taille </span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->taille}}" disabled >
															<span class="focus-input100"></span>
														</div>
																</td></tr>
															<tr><td>
												        <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Sexe</span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->sexe}}" disabled >
															<span class="focus-input100"></span>
														</div>
																</td><td>
														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Diplome</span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->part->diplome}}" disabled >
															<span class="focus-input100"></span>
														</div>
																</td><td>
														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Métier</span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->part->metier}}" disabled >
															<span class="focus-input100"></span>
														</div></td></tr>
																<tr><td>
														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Expérience</span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->part->experience}}" disabled >
															<span class="focus-input100"></span>
														</div>
																</td>
															<td>
														<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
															<span class="label-input100">Adresse</span>
															<input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{$user->part->adresse}}" disabled >
															<span class="focus-input100"></span>
														</div>
															</td></tr>

														<div class="container-contact100-form-btn">
															<tr><td>
														<form action="/accept/{{ $user->id }}">	<button class="contact100-form-btn">
						<span>
							Accepter
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
															</button>
														</form></td><td>
															<form action="/delete/{{ $user->id }}">	<button class="contact100-form-btn">
						<span>
							Supprimer
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
																</button>
															</form></td><td>
															<form action="/fixpartenaire">	<button class="contact100-form-btn">
						<span>
							Retour
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>

															</form></td></tr>
														</div>
														</table>
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


	<!--===============================================================================================-->
	<script src="email/vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="email/vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="email/vendor/bootstrap/js/popper.js"></script>
	<script src="email/vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="email/vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="email/vendor/daterangepicker/moment.min.js"></script>
	<script src="email/vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="email/vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="email/js/map-custom.js"></script>
	<!--===============================================================================================-->
	<script src="email/js/main.js"></script>



	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>


@endsection
