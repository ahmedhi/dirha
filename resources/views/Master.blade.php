<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Fallo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/FalloSolo.png" rel="shortcut icon"/>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/magnific-popup.css"/>
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <link rel="stylesheet" href="css/style.css"/>


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @yield('cssCustom')

</head>
<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader">
        <img src="img/FalloSolo.png" alt="" class="iconeLoader">
        <h2 style="alignment: center">Chargement....</h2>
    </div>
</div>


<!-- Header section -->
<header class="header-section">
    <div class="row logo">
        <img src="img/FalloSolo.png" alt="" class="iconeLoad"><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li @if( request()->is('/') ) class="active" @endauth><a href="/">Acceuil</a></li>
            @auth()
                @if( auth()->user()->type === -1 || auth()->user()->type === 0)
                <li>
                    <a class="nav-link" href="/config">Dashboard<span class="sr-only">(current)</span></a>
                </li>
                 @endif
            <li ><a href="/menu">Menu</a></li>
            @endauth
            <li><a href="/Bestarticles">Nos meilleurs articles</a></li>
            <li><a href="#contact">Contact</a></li>

                @if( !request()->is('connexion') )

                    @auth
                                    <li @if( request()->is('mon-compte') or request()->is('infosPersonnels') or request()->is('modifInfos'))
                                        class="active"
                                            @endif>
                                        <a href="/mon-compte">
                                            Mon Compte
                                        </a>
                                    </li>
                                    <li>
                                        <a style="color: red;" href="/deconnexion">
                                            Déconnexion
                                        </a>
                                    </li>

                                @else
                                    @if( request()->is('inscription'))

                                    @else
                                        <li>
                                        <a style="color: #1f648b;" href="/inscription">
                                            <strong>S'inscire</strong>
                                        </a>
                                        </li>
                                    @endif
                                 <li>
                                    <a href="/connexion" style="color: green;">
                                        Se connecter
                                    </a>
                                </li>

                    @endauth
                @endif
        </ul>
    </nav>
</header>
<!-- Header section end -->

@yield('content')



<!-- Promotion section -->
@guest()
<div class="promotion-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h2>Qu'attendez vous pour nous rejoindre !</h2>
                <p>Suivez les conseils de spécialiste et composez votre menu dans les moindres détails avec les conseils de spécialiste dans le domaine de la diététique</p>
            </div>
            <div class="col-md-3">
                <div class="promo-btn-area">
                    <a href="/inscription" class="site-btn btn-2">Inscrivez vous !</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endguest
<!-- Promotion section end-->


<!-- Contact section -->
<div class="contact-section spad fix">
    <div class="container" >
        <div class="row">
            <!-- contact info -->
            <div class="col-md-5 col-md-offset-1 contact-info col-push">
                <div class="section-title left">
                    <h2>Contactez nous</h2>
                </div>
                <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. </p>
                <h3 class="mt60">Coordonnée</h3>
                <p class="con-item"> Rabat Salé Kenitra <br> 12040 </p>
                <p class="con-item">+212 6 16 17 16 17</p>
                <p class="con-item">fallo@contact.com</p>
            </div>
            <!-- contact form -->
            <div id="contact" class="col-md-6 col-pull">
                <form class="form-class" id="con_form">
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="name" placeholder="@auth(){{ auth()->user()->nom }}@else Nom @endauth">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email" placeholder="@auth(){{ auth()->user()->email }}@else Email @endauth">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="objet" placeholder="Objet">
                            <textarea name="message" placeholder="Message"></textarea>
                            <button class="site-btn">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end-->


<!-- Footer section -->
<footer class="footer-section">
    <h2>2019 All rights reserved. Made by ASKOUR & HILALI</h2>
</footer>
<!-- Footer section end -->




<!--====== Javascripts & Jquery ======-->
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
