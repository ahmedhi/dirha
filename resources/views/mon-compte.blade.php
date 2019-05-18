<!DOCTYPE html>
<html lang="en">

    <head>
        <title> Mon Compte </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="profil/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="profil/css/animate.css">

    <link rel="stylesheet" href="profil/css/owl.carousel.min.css">
    <link rel="stylesheet" href="profi/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="profil/css/magnific-popup.css">

    <link rel="stylesheet" href="profil/css/aos.css">

    <link rel="stylesheet" href="profil/css/ionicons.min.css">

    <link rel="stylesheet" href="profil/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="profil/css/jquery.timepicker.css">


    <link rel="stylesheet" href="profil/css/flaticon.css">
    <link rel="stylesheet" href="profil/css/icomoon.css">
    <link rel="stylesheet" href="profil/css/style.css">
</head>
<body>


<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <img src="img/FalloSolo.png" width="90" height="90"> Fallo <br> <br><br> <br> <br>
        <h1 id="colorlib-logo"><a href="index.html">{{auth()->user()->nom}} </a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="colorlib-active"> <a href="mon-compte"> Profil</a></li>
                <li><a href="infosPersonnels">Informations Personnels</a></li>
                <li><a href="modifInfos">Modifier les informations Personnels </a></li>

            </ul>
        </nav>

        <div class="colorlib-footer">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Fallo &copy;<script>document.write(new Date().getFullYear());</script> ASKOUR Hamza - HILALI Ahmed <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Fallo</a>

        </div>
    </aside> <!-- END COLORLIB-ASIDE -->
    <div id="colorlib-main">
        <div class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(profil/images/nut.jpg);" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="js-fullheight d-flex justify-content-center align-items-center">
                <div class="col-md-8 text text-center">
                    <div class="img mb-4" style="background-image: url(profil/images/3498.jpg);"></div>
                    <div class="desc">
                        <h2 class="subheading">Bienvenue</h2>
                        <h1 class="mb-4">{{auth()->user()->nom}} </h1>
                        <p class="mb-4">Compte Normal</p>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="profil/js/jquery.min.js"></script>
<script src="profil/js/jquery-migrate-3.0.1.min.js"></script>
<script src="profil/js/popper.min.js"></script>
<script src="profil/js/bootstrap.min.js"></script>
<script src="profil/js/jquery.easing.1.3.js"></script>
<script src="profil/js/jquery.waypoints.min.js"></script>
<script src="profil/js/jquery.stellar.min.js"></script>
<script src="profil/js/owl.carousel.min.js"></script>
<script src="profil/js/jquery.magnific-popup.min.js"></script>
<script src="profil/js/aos.js"></script>
<script src="profil/js/jquery.animateNumber.min.js"></script>
<script src="profil/js/bootstrap-datepicker.js"></script>
<script src="profil/js/jquery.timepicker.min.js"></script>
<script src="profil/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="profil/js/google-map.js"></script>
<script src="profil/js/main.js"></script>

</body>
</html>
