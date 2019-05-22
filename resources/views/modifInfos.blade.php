
@section('refsheet')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Modifier les informations Personnels </title>
    <link rel="icon" type="image/png" href="img/FalloSolo.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.min.css">
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






<! bootstrap >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>




<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>

    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
      <br><br>  <img src="img/FalloSolo.png" width="90" height="90"> <br> <br><br> <br> <br>
        <h1 id="colorlib-logo"><a href="index.html">ASKOUR Hamza </a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
               <li><a href="mon-compte"> Profil</a></li>
                <li><a href="infosPersonnels">Informations Personnels</a></li>
                <li class="colorlib-active"><a href="modifInfos">Modifier les informations Personnels </a></li>
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
                <div class="col-md-8 text text-center" >

                    <div class="sidebar-box ftco-animate">
                       <br><br> <h3 class="sidebar-heading">Modification de : </h3>
                        <ul class="tagcloud">
                            <a href="#" class="tag-cloud-link">Mot de passe </a>
                            <a href="#" class="tag-cloud-link">Nom Complet </a>
                            <a href="#" class="tag-cloud-link">Photo de profil</a>
                            <a href="#" class="tag-cloud-link">Taille</a>
                            <a href="#" class="tag-cloud-link">Poids</a>
                            <a href="#" class="tag-cloud-link">Date de naissance</a>
                            <a href="#" class="tag-cloud-link">Numero de Téléphone</a>
                        </ul>
                    </div>






                    <form method="post" class="section" enctype="multipart/form-data" >

                    {{csrf_field()}}



                    <!-- Mot de passe -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Ancien Mot de passe" name="ancienPassword">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Nouveau Mot de passe" name="password">

                        </div>
                        <!-- Gestion d'erreur pour le mot de passe -->
                        @if( $errors->has('password'))
                            <p class="erreur">
                                {{ $errors->first('password') }}
                            </p>

                        @endif

                    <!-- Mot de passe de confirmation-->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" class="form-control" placeholder="Mot de passe de confirmation" name="password_confirmation">
                        </div>

                        <!-- Gestion d'erreur pour le mot de passe de confirmation-->
                        @if( $errors->has('password_confirmation'))

                            <p class="erreur">
                                {{ $errors->first('password_confirmation') }}
                            </p>

                        @endif

                        <br>

                        <h3 class="sidebar-heading">Les anciennes infromations : </h3> <br>

                        <!-- Nom Complet-->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="nom_complet" value="{{ auth()->user()->nom }}" >
                        </div>

                        <!-- Gestion d'erreur pour le Nom -->
                        @if( $errors->has('nom_complet'))
                            <p class="erreur">
                                {{ $errors->first('nom_complet') }}
                            </p>

                        @endif

                    <!-- Photo de profil -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-images"></i></span>
                            </div>
                            <input type="file" class="form-control" id ="image" name="image" placeholder="Photo de profil" style="padding-bottom: 0.400px;border-bottom-width: 0px;padding-top: 0.5px;">
                        </div>

                        <!-- Gestion d'erreur pour le image -->
                        @if( $errors->has('image'))
                            <p class="erreur">
                                {{ $errors->first('image') }}
                            </p>

                        @endif

                    <!-- Numero de téléphone -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-mobile"></i></span>
                            </div>
                            <input  type="tel"
                                    class="form-control" name="num"
                                    placeholder="Numero de Téléphone"
                                    value="{{ auth()->user()->tel }}"
                                    pattern="0[0-9]{9}"
                            >
                        </div>

                        <!-- Gestion d'erreur pour le num -->
                        @if( $errors->has('num'))
                            <p class="erreur">
                                {{ $errors->first('num') }}
                            </p>

                        @endif

                    <!-- Date de naissance -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar-alt "></i></span>
                            </div>
                            <input type="date" class="form-control" name="date" placeholder="Date de naissance" value="{{ auth()->user()->date_de_naissance }}">
                        </div>

                        <!-- Gestion d'erreur pour le date -->
                        @if( $errors->has('date'))
                            <p class="erreur">
                                {{ $errors->first('date') }}
                            </p>

                        @endif

                        <!-- Poids -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-weight"></i></span>
                            </div>
                            <input type="text" class="form-control" name="poids" placeholder="Poids (kg)" value="{{ auth()->user()->poids }}">
                        </div>

                        <!-- Gestion d'erreur pour le poids -->
                        @if( $errors->has('poids'))
                            <p class="erreur">
                                {{ $errors->first('poids') }}
                            </p>

                        @endif

                    <!-- Taille -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-ruler-vertical"></i></span>
                            </div>
                            <input type="text" class="form-control" name="taille" placeholder="Taille (cm)" value="{{ auth()->user()->taille}}">
                        </div>

                        <!-- Gestion d'erreur pour le poids -->
                        @if( $errors->has('taille'))
                            <p class="erreur">
                                {{ $errors->first('taille') }}
                            </p>

                    @endif

                    <!-- Boutton de confirmation -->
                        <center>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Enregistrer modification</button>
                            </div>
                        </center>

                    </form>







                </div>
            </div>
        </div>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<!-- loader -->

<div id="colorlib-main">

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container px-md-5">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Informations Personnels </h2>
                        <ul class="list-unstyled categories">

                            <li>Type de Compte :
                                @if(auth()->user()->type == -1 )
                                    Super User
                                @endif
                                @if(auth()->user()->type == 1)
                                    Utilisateur Normal
                                @endif
                                @if(auth()->user()->type == 3)
                                    Partenaire (Besoin de validation)
                                @endif
                                @if(auth()->user()->id == 0)
                                    Admin
                                @endif
                                @if(auth()->user()->type == 2)
                                    Partenaire
                                @endif
                            </li>
                            <li>Nom Complet : {{auth()->user()->nom}} </li>
                            <li>Date de Naissance : {{auth()->user()->date_de_naissance}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">.</h2>
                        <ul class="list-unstyled categories">
                            <li>Sexe : {{auth()->user()->sexe}} </li>
                            <li>Taille : {{auth()->user()->taille}} cm </li>
                            <li>Poids : {{auth()->user()->poids}} Kg</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">.</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">{{auth()->user()->pays}}</span></li>
                                <li><span class="icon icon-phone"></span><span class="text">{{auth()->user()->tel}}</span></li>
                                <li><span class="icon icon-envelope"></span><span class="text">{{auth()->user()->email}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
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

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
