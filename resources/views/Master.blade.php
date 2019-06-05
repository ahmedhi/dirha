<html>
<head>
    <!-- Specify the title -->
    <title>
        @yield('title')
    </title>

    <!-- FavIcon -->
    <link rel="icon" type="image/png" href="img/FalloSolo.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="js/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

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

@yield('header-content')

<!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Master.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height:auto;}
        }
    </style>

</head>


<body>

<!-- NavBar -->
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
                <a class="nav-link" href="/Bestarticles">Nos meilleurs articles <span class="sr-only">(current)</span></a>
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
                        <a class="" href="/mon-compte">
                            Mon Compte
                        </a>
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

<div class="container-fluid text-center" style=" position: relative ; top: 100px ;">
    <div class="row">

        <!-- User Menu | Visible que si l'utilisateur est connecté-->
        @if( auth()->check())
            <div class="card content CardColLeft">
                <br><br>
                <center> <img src="img/FalloSolo.png" width="90" height="90"></center>

                <p class="text-sm-left font-weight-bold">
                <h4> <img src="UserImage/{{auth()->user()->img}}"  class="rounded-circle" width="50xp" height="50xp"> {{auth()->user()->nom}}</h4>
                </p>
                <br>
                <h4>
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
                </h4>
                <br><br><br><br>
                <!--
                <ul>
                 <br>
                <li>--><strong>Date de création : </strong><br>{{ auth()->user()->created_at }}<!--</li>
                        <li class="colorlib-active"><a href="/acceuil">Acceuil</a></li>
                        <li><a href="mon-compte">Mon Compte</a></li>
                        <li><a href="">Mon Menu</a></li>
                        <li><a href="contact">Contactez-Nous</a></li>
                        <li><a href="/deconnexion">Déconnexion</a></li>

                </ul>
                -->
            </div>
    @endif
    <!-- Content -->
        <div class="card col-sm-6 text-left  DivContent" style="position: relative;">

            <!-- Image Fallo -->
            <img src="img/FalloSolo.png" class="imgIcon" >

            @yield('content')

        </div>
        <!-- ADS Bar -->
        <!--<div class="CardColRight" >
            <center>
                <img src="img/ADSHan.jpg" class="imgADSF">
                <img src="img/ADSFallo.png" class="imgADSL">
            </center>
        </div>
        -->
    </div>
    <br>
    <div class="row">
        <footer class="footer">
            <div class="footer-content">

                <div class="footer-list">

                    <ul>
                        <li>
                            <a href="#" style="text-decoration: none">
                                <p>A propos de nous</p>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="footer-list">

                    <ul>
                        <li>
                            <a href="#" style="text-decoration: none">
                                <p>Support</p>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="footer-list">

                    <ul>
                        <li>
                            <a href="#" style="text-decoration: none">

                                <p>FAQ</p>
                            </a>
                        </li>

                    </ul>
                </div>

                <div class="footer-list">

                    <ul>
                        <li>
                            <a href="#" style="text-decoration: none" data-toggle="modal" data-target="#contact">
                                <p>Contactez nous</p>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="footer-about">
                <div class="copyright">
                    <i class="bnb-icon">
                        <img class="icone" src="img/FalloSolo.png" viewBox="0 0 1000 1000" role="presentation" aria-hidden="true" focusable="false" >
                        </i> &copy; PFA 3eme Annee IIR

                </div>

                <ul class="about-list">

                    <li>
                        <a href="#">
                            <i class="social-icon">
                                <svg viewBox="0 0 32 32" role="img" aria-label="Facebook" focusable="false" style="height: 1em; width: 1em; display: block; fill: rgb(118, 118, 118);"><path d="m8 14.41v-4.17c0-.42.35-.81.77-.81h2.52v-2.08c0-4.84 2.48-7.31 7.42-7.35 1.65 0 3.22.21 4.69.64.46.14.63.42.6.88l-.56 4.06c-.04.18-.14.35-.32.53-.21.11-.42.18-.63.14-.88-.25-1.78-.35-2.8-.35-1.4 0-1.61.28-1.61 1.73v1.8h4.52c.42 0 .81.42.81.88l-.35 4.17c0 .42-.35.71-.77.71h-4.21v16c0 .42-.35.81-.77.81h-5.21c-.42 0-.8-.39-.8-.81v-16h-2.52a.78.78 0 0 1 -.78-.78" fill-rule="evenodd"></path></svg>
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="social-icon">
                                <svg viewBox="0 0 32 32" role="img" aria-label="Twitter" focusable="false" style="height: 1em; width: 1em; display: block; fill: rgb(118, 118, 118);"><path d="m31 6.36c-1.16.49-2.32.82-3.55.95 1.29-.76 2.22-1.87 2.72-3.38a13.05 13.05 0 0 1 -3.91 1.51c-1.23-1.28-2.75-1.94-4.51-1.94-3.41 0-6.17 2.73-6.17 6.12 0 .49.07.95.17 1.38-4.94-.23-9.51-2.6-12.66-6.38-.56.95-.86 1.97-.86 3.09 0 2.07 1.03 3.91 2.75 5.06-1-.03-1.92-.3-2.82-.76v.07c0 2.89 2.12 5.42 4.94 5.98-.63.17-1.16.23-1.62.23-.3 0-.7-.03-1.13-.13a6.07 6.07 0 0 0 5.74 4.24c-2.22 1.74-4.78 2.63-7.66 2.63-.56 0-1.06-.03-1.43-.1 2.85 1.84 6 2.76 9.41 2.76 7.29 0 12.83-4.01 15.51-9.3 1.36-2.66 2.02-5.36 2.02-8.09v-.46c-.03-.17-.03-.3-.03-.33a12.66 12.66 0 0 0 3.09-3.16" fill-rule="evenodd"></path></svg>
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="social-icon">
                                <svg viewBox="0 0 24 24" role="img" aria-label="Instagram" focusable="false" style="height: 1em; width: 1em; display: block; fill: rgb(118, 118, 118);"><path d="m23.09.91c-.61-.61-1.33-.91-2.17-.91h-17.84c-.85 0-1.57.3-2.17.91s-.91 1.33-.91 2.17v17.84c0 .85.3 1.57.91 2.17s1.33.91 2.17.91h17.84c.85 0 1.57-.3 2.17-.91s.91-1.33.91-2.17v-17.84c0-.85-.3-1.57-.91-2.17zm-14.48 7.74c.94-.91 2.08-1.37 3.4-1.37 1.33 0 2.47.46 3.41 1.37s1.41 2.01 1.41 3.3-.47 2.39-1.41 3.3-2.08 1.37-3.41 1.37c-1.32 0-2.46-.46-3.4-1.37s-1.41-2.01-1.41-3.3.47-2.39 1.41-3.3zm12.66 11.63c0 .27-.09.5-.28.68a.92.92 0 0 1 -.67.28h-16.7a.93.93 0 0 1 -.68-.28.92.92 0 0 1 -.27-.68v-10.13h2.2a6.74 6.74 0 0 0 -.31 2.05c0 2 .73 3.71 2.19 5.12s3.21 2.12 5.27 2.12a7.5 7.5 0 0 0 3.75-.97 7.29 7.29 0 0 0 2.72-2.63 6.93 6.93 0 0 0 1-3.63c0-.71-.11-1.39-.31-2.05h2.11v10.12zm0-13.95c0 .3-.11.56-.31.77a1.05 1.05 0 0 1 -.77.31h-2.72c-.3 0-.56-.11-.77-.31a1.05 1.05 0 0 1 -.31-.77v-2.58c0-.29.11-.54.31-.76s.47-.32.77-.32h2.72c.3 0 .56.11.77.32s.31.47.31.76z" fill-rule="evenodd"></path></svg>
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </footer>

    </div>
</div>




<script src="js/bootstrap.min.js"></script>

</body>

<div class="modal fade" id="contact">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header ">
                <h2 class="modal-title" style="margin-left: auto; margin-right: auto">Contactez-Nous</h2>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="container">
                <form class="contact100-form validate-form" action="/sendMail" method="post" >
                <span class="contact100-form-title">
					Contactez-Nous
				</span>

                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Name is required">
                        <span class="label-input100">Nom </span>
                        <input class="input100" type="text" name="nom" placeholder="Enter your name" value="{{ auth()->user()->nom }}" disabled >
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz" >
                        <span class="label-input100">Email</span>
                        <input class="input100" type="text" name="email" placeholder="Enter your email addess"value="{{ auth()->user()->email }}" disabled >
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


    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</html>
