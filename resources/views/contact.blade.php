@extends('utilisateurMaster')
@section('content')


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="email/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="email/vendor/bootstrap/css/bootstrap.min.css">
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
    <!--===============================================================================================-->
    <div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(profil/images/nutri.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="js-fullheight d-flex justify-content-center align-items-center">
            <div class="col-md-8 text text-center" >

<div class="container-contact100">

    <button class="contact100-btn-show">
        <i class="fa fa-envelope-o" aria-hidden="true"></i>
    </button>

    <div class="wrap-contact100">
        <button class="contact100-btn-hide">
            <i class="fa fa-close" aria-hidden="true"></i>
        </button>

        <form class="contact100-form validate-form" action="/sendMail" method="post" >
                <span class="contact100-form-title">
					Contactez-Nous
				</span>

            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">Nom </span>
                <input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{auth()->user()->nom}}" disabled >
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" >
                <span class="label-input100">Email</span>
                <input class="input100" type="text" name="email" placeholder="Enter your email addess"value="{{auth()->user()->email}}" disabled >
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">Objet</span>
                <input class="input100" type="text" name="objet" placeholder="Objet">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                <span class="label-input100">Message</span>
                <textarea class="input100" name="message" placeholder="Votre Message ici ... "></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							Envoyer Message
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </form>

        <span class="contact100-more">
				For any question contact our 24/7 call center: <span class="contact100-more-highlight">0616171617</span>
			</span>
    </div>
</div>


<div id="dropDownSelect1"></div>

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

            </div>
        </div>
    </div>

@endsection