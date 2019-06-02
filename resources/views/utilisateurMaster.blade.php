
        <!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact </title>
    <link rel="icon" type="image/png" href="img/FalloSolo.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="profil/css/bootstrap.min.css">
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<style>
    li{
        color : darkgray;
    }
</style>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">

    <div class="navbar-brand">
        <a class="navbar-brand" href="/">
            <img src="img/FalloSolo.png" width="30" height="30" class="d-inline-block align-top">
            Fallo
        </a>
    </div>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            @auth
                @if( auth()->user()->type === -1 || auth()->user()->type === 0)
                    <li class="nav-item active">
                        <a class="nav-link" href="/config">Dashboard<span class="sr-only">(current)</span></a>
                    </li>
                @endif
            @endauth

            <li class="nav-item active">
                <a class="nav-link" href="/">Acceuil <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/00">Nos meilleurs articles <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>


    <!-- try to have the path of the page
          Les deux boutton pour s'inscrire et se connecter
          ne seront pas visible si l'utilisateur
          est au niveau de la page de connexion
    -->



    @if( !request()->is('connexion') )


        <div class="my-2 my-lg-0">
            <div class="navbar-brand">
                <div class="buttons">

                    @auth

                        <a class="btn btn-danger" href="/deconnexion">
                            Déconnexion
                        </a>

                    @else
                        @if( request()->is('inscription'))
                            <a class="btn btn-outline-success" href="/inscription">
                                <strong>Ajouter administrateur</strong>
                            </a>
                        @else
                            <a class="btn btn-outline-success" href="/inscription">
                                <strong>S'inscire</strong>
                            </a>
                        @endif
                        <a class="btn btn-outline-secondary" href="/connexion">
                            Se connecter
                        </a>
                    @endauth

                </div>
            </div>
        </div>
    @endif
</nav>



<div id="colorlib-main">
    @yield('content')

</div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->





<! bootstrap >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>




<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <br><br>    <img src="img/FalloSolo.png" width="90" height="90">  <br> <br><br> <br> <br>
        <h1 id="colorlib-logo"><a href="index.html">{{auth()->user()->nom}} </a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li><a href="mon-compte"> Profil</a></li>
                <li><a href="infosPersonnels">Informations Personnels</a></li>
                <li><a href="modifInfos">Modifier les informations Personnels </a></li>
                <li><a href="contact">Contactez-Nous</a></li>

            </ul>
        </nav>
        <div class="colorlib-footer">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Fallo &copy;<script>document.write(new Date().getFullYear());</script> ASKOUR Hamza - HILALI Ahmed <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Fallo</a>

        </div>
    </aside> <!-- END COLORLIB-ASIDE -->

</div>
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

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
